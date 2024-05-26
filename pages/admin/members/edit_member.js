document
  .querySelector(".container__content__admin_edit_member__form")
  .addEventListener("submit", (event) => {
    event.preventDefault();

    const id = new URLSearchParams(window.location.search).get("id");
    const name = document.querySelector("#name").value;
    const team_id = document.querySelector("#team").value;

    if (!name || !team_id) {
      alert("Name and team cannot be empty");
      return;
    }

    fetch("../../../scripts/edit_admin_member.php", {
      method: "POST",
      body: JSON.stringify({
        id: id,
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
          window.location.href =
            "/club_sportiv/pages/admin/members/members.php";
        } else {
          alert(data.message);
          console.error(data.message);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
