document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".cstm_tabs h4");

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      
      // 🔥 Remove active from all
      tabs.forEach(t => t.classList.remove("active"));

      // 🔥 Add active to clicked
      this.classList.add("active");
    });
  });
});


// document.querySelectorAll('.collapse').forEach(collapse => {

//   collapse.addEventListener('show.bs.collapse', function () {
//     const header = this.previousElementSibling;
//     header.style.backgroundColor = "#396cf0";
//     header.style.color = "#fff";
//   });

//   collapse.addEventListener('hide.bs.collapse', function () {
//     const header = this.previousElementSibling;
//     header.style.backgroundColor = "";
//     header.style.color = "";
//   });

// });