document
  .querySelectorAll(
    ".container__content__admin_announcements__an__actions__edit"
  )
  .forEach((button) => {
    button.addEventListener("click", (event) => {
      const announcementId = event.target.getAttribute("data-id");
      window.location.href =
        "/club_sportiv/pages/admin/announcements/edit_announcement.php?id=" +
        announcementId;
    });
  });

document
  .querySelectorAll(
    ".container__content__admin_announcements__an__actions__delete"
  )
  .forEach((button) => {
    button.addEventListener("click", async (event) => {
      const announcementId = event.target.getAttribute("data-id");
      const confirmation = confirm(
        "Are you sure you want to delete this announcement?"
      );
      if (confirmation) {
        try {
          const response = await fetch(
            "../../../scripts/delete_admin_announcement.php",
            {
              method: "POST",
              body: JSON.stringify({
                id: announcementId,
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
