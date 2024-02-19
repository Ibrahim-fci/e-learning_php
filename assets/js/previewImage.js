function loadFile(event) {
  console.log("changed");
  document.getElementById("profileImage").src = URL.createObjectURL(
    event.target.files[0]
  );
}
