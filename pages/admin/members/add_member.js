const form = document.querySelector(
  ".container__content__admin_add_member__form"
);

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const name = formData.get("name");
  const team_id = formData.get("team");

  if (!name || name.trim() === "") {
    alert("Name is required");
    return;
  }

  fetch("../../../scripts/add_admin_member.php", {
    method: "POST",
    body: JSON.stringify({
      name: name,
      team_id: team_id,
    }),
    headers: {
      "Content-Type": "application/json",
    },
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.status === "success") {
        console.log(data.message);
        form.reset();
        window.location.href = "/club_sportiv/pages/admin/members/members.php";
      } else {
        alert(data.message);
        console.error(data.message);
      }
    })
    .catch((error) => {
      console.error("Error:", error);
    });
});
