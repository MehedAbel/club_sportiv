const form = document.querySelector(
  ".container__content__admin_add_announcement__form"
);

form.addEventListener("submit", async (e) => {
  e.preventDefault();
  const formData = new FormData(form);
  const title = formData.get("title");
  const description = formData.get("description");

  if (!title || title.trim() === "") {
    alert("Title is required");
    return;
  }

  if (!description || description.trim() === "") {
    alert("Description is required");
    return;
  }

  fetch("../../../scripts/add_admin_announcement.php", {
    method: "POST",
    body: JSON.stringify({
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
        form.reset();
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
