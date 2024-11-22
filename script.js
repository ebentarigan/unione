// Menambahkan interaktivitas sederhana untuk tautan sosial media
document.querySelectorAll('.social-icon').forEach(icon => {
    icon.addEventListener('click', (e) => {
        e.preventDefault();
        alert(`You clicked on ${e.target.innerText}`);
    });
});
