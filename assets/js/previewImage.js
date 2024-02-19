function loadFile(event, id) {
  console.log("up");
  document.getElementById(id).src = URL.createObjectURL(event.target.files[0]);
  document.getElementById("update_image").src = URL.createObjectURL(
    event.target.files[0]
  );
}

function updateCourse(
  id,
  title,
  description,
  image,
  price,
  duration,
  category
) {
  console.log("done");
  console.log(id, title, description, image, price, duration, category);

  // @desc set data on update modal
  document.getElementById("update_id").value = id;
  document.getElementById("update_title").value = title;
  document.getElementById("update_description").value = description;
  document.getElementById("update_image").src = image;
  document.getElementById("update_price").value = price;
  document.getElementById("update_duration").value = duration;
  document.getElementById("update_category").value = category;
}

console.log("loaded");
