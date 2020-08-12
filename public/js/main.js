const imgPreview = (event) => {
       let img = document.querySelector('.imgPreview');
       img.src = URL.createObjectURL(event.target.files[0]);
}