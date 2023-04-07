const fileInput = document.getElementById('avatar');
const fileLabel = document.querySelector('.form-wrapper__label');

fileInput.addEventListener('change', (event) => {
    const fileList = event.target.files.name;
    console.log(fileList);
});
