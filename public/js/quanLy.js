let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
// let searchBtn = document.querySelector(".bx-search");
let select = document.querySelector('.home-section');
closeBtn.addEventListener("click", ()=>{
  sidebar.classList.toggle("open");
  select.classList.toggle("with");
  menuBtnChange();//calling the function(optional)
});

// searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
//   sidebar.classList.toggle("open");
//   menuBtnChange(); //calling the function(optional)
// });

// following are the code to change sidebar button(optional)
function menuBtnChange() {
 if(sidebar.classList.contains("open")){
   closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
 }else {
   closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
 }
}

// let giaoDienBacSi = document.querySelector("#giaoDienBacSi");
// let giaoDienBenhNhan = document.querySelector("#giaoDienBenhNhan");
// let giaoDienPhieuKham = document.querySelector("#giaoDienPhieuKham");
// let giaoDienLichLamViec = document.querySelector("#giaoDienLichLamViec");
// let giaoDienLichHen = document.querySelector("#giaoDienLichHen");
// let giaoDienKhoa = document.querySelector("#giaoDienKhoa");
// let giaoDienDichVu = document.querySelector("#giaoDienDichVu");


// let chonBacSi = document.querySelector("#chonBacSi");
// let chonBenhNhan = document.querySelector("#chonBenhNhan");
// let chonDichVu = document.querySelector("#chonDichVu");
// let chonKhoa = document.querySelector("#chonKhoa");
// let chonLichLamViec = document.querySelector("#chonLichLamViec");
// let chonLichHen = document.querySelector("#chonLichHen");
// let chonPhieuKham = document.querySelector("#chonPhieuKham");


// function showGiaoDien(tenGiaoDien){
//   giaoDienBacSi.style.display = 'none';
//   giaoDienBenhNhan.style.display = 'none';
//   giaoDienPhieuKham.style.display = 'none';
//   giaoDienLichLamViec.style.display = 'none';  
//   giaoDienLichHen.style.display = 'none';
//   giaoDienKhoa.style.display = 'none';
//   giaoDienDichVu.style.display = 'none';

//   tenGiaoDien.style.display = 'block';

// }

// chonBacSi.addEventListener("click" , function() {
//   showGiaoDien(giaoDienBacSi);
// });

// chonBenhNhan.addEventListener("click" , function(){
//   showGiaoDien(giaoDienBenhNhan);
// })

// chonDichVu.addEventListener("click" , function() {
//   showGiaoDien(giaoDienDichVu);
// });

// chonKhoa.addEventListener("click" , function(){
//   showGiaoDien(giaoDienKhoa);
// })

// chonLichLamViec.addEventListener("click" , function() {
//   showGiaoDien(giaoDienLichLamViec);
// });

// chonLichHen.addEventListener("click" , function(){
//   showGiaoDien(giaoDienLichHen);
// })

// chonPhieuKham.addEventListener("click" , function() {
//   showGiaoDien(giaoDienPhieuKham);
// });




