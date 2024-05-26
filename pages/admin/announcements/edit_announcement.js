document
  .querySelector(".container__content__admin_edit_announcement__form")
  .addEventListener("submit", (event) => {
    event.preventDefault();

    const id = new URLSearchParams(window.location.search).get("id");
    const title = document.querySelector("#title").value;
    const description = document.querySelector("#description").value;

    if (!title || !description) {
      alert("Title and description cannot be empty");
      return;
    }

    fetch("../../../scripts/edit_admin_announcement.php", {
      method: "POST",
      body: JSON.stringify({
        id: id,
        title: title,
        description: description,
      }),
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((data) => {
        if (data.status === "success") {
          console.log(data.message);
          // Redirect to the "anunturi" page
          window.location.href =
            "/club_sportiv/pages/announcements/announcements.php";
        } else {
          alert(data.message);
          console.error(data.message);
        }
      })
      .catch((error) => {
        console.error("Error:", error);
      });
  });
