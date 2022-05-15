const dropdownUsername = document.querySelector('.navbar .dropdown .username');
const dropdownBox = document.querySelector('.navbar .dropdown .dropdown-box');

dropdownUsername.onclick = () => {
    dropdownBox.classList.toggle('show');
}