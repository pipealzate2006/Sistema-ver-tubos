<?php

// PRODUCTOS

$insertar_productos = "<script>Swal.fire({
    icon: 'success',
    title: 'Felicitaciones',
    text: 'Los datos se registraron correctamente'
  }).then(function() {
    window.location.href = '../admin/mostrar-productos.php';});
  </script>";

$actualizar_productos = "<script>Swal.fire({
    icon: 'success',
    title: 'Felicitaciones',
    text: 'Los datos se actualizaron correctamente'
  }).then(function() {
    window.location.href = '../admin/mostrar-productos.php';});
  </script>";

$eliminar_productos = "<script>Swal.fire({
    icon: 'success',
    title: 'Felicitaciones',
    text: 'Los datos se eliminaron correctamente'
  }).then(function() {
    window.location.href = '../admin/mostrar-productos.php';});
  </script>";

// USUARIOS

$insertar_usuarios = "<script>Swal.fire({
    icon: 'success',
    title: 'Felicitaciones',
    text: 'Los datos se registraron correctamente'
  }).then(function() {
    window.location.href = '../admin/mostrar-usuarios.php';});
  </script>";

$actualizar_usuarios = "<script>Swal.fire({
    icon: 'success',
    title: 'Felicitaciones',
    text: 'Los datos se actualizaron correctamente'
  }).then(function() {
    window.location.href = '../admin/mostrar-usuarios.php';});
  </script>";

$eliminar_usuarios = "<script>Swal.fire({
    icon: 'success',
    title: 'Felicitaciones',
    text: 'Los datos se eliminaron correctamente'
  }).then(function() {
    window.location.href = '../admin/mostrar-usuarios.php';});
  </script>";

// login

$cerrarSesion = '<script>
  let timerInterval;
  Swal.fire({
    title: "Cerrando Sesión",
    html: "Se cerrará en <b></b> milisegundos.",
    timer: 2000,
    timerProgressBar: true,
    didOpen: () => {
      Swal.showLoading();
      const timer = Swal.getPopup().querySelector("b");
      timerInterval = setInterval(() => {
        timer.textContent = `${Swal.getTimerLeft()}`;
      }, 100);
    },
    willClose: () => {
      clearInterval(timerInterval);
      // Aquí redirige a la página que desees
      window.location.href = "../login/login.html";
    }
  }).then((result) => {
    /* Read more about handling dismissals below */
    if (result.dismiss === Swal.DismissReason.timer) {
      console.log("Fui cerrado por el temporizador");
    }
  });
  </script>';

$acceso_denegado = "<script>Swal.fire({
    icon: 'warning',
    title: 'Lo siento',
    text: 'Acceso denegado, revisa el correo o la contraseña'
  }).then(function() {
    window.location.href = '../login/login.html';});
  </script>";
