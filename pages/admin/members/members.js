document
  .querySelectorAll(".container__content__admin_members__member__actions__edit")
  .forEach((button) => {
    button.addEventListener("click", (event) => {
      const memberId = event.target.getAttribute("data-id");
      const teamId = event.target.getAttribute("data-team-id");
      window.location.href =
        "/club_sportiv/pages/admin/members/edit_member.php?id=" +
        memberId +
        "&teamId=" +
        teamId;
    });
  });

document
  .querySelectorAll(
    ".container__content__admin_members__member__actions__delete"
  )
  .forEach((button) => {
    button.addEventListener("click", async (event) => {
      const memberId = event.target.getAttribute("data-id");
      const confirmation = confirm(
        "Are you sure you want to delete this member?"
      );
      if (confirmation) {
        try {
          const response = await fetch(
            "../../../scripts/delete_admin_member.php",
            {
              method: "POST",
              body: JSON.stringify({
                id: memberId,
              }),
              headers: {
                "Content-Type": "application/json",
              },
            }
          );
          const data = await response.json();
          if (data.status === "success") {
            console.log(data.message);
            window.location.reload(true);
          } else {
            alert(data.message);
            console.error(data.message);
          }
        } catch (error) {
          console.error("Error:", error);
        }
      }
    });
  });
