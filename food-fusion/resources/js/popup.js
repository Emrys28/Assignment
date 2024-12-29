document.addEventListener('DOMContentLoaded', () => {
    const openPopupButton = document.getElementById('openPopupButton');
    const closePopupButton = document.querySelector('#join-us button[type="button"]');

    openPopupButton.addEventListener('click', () => {
        document.getElementById('join-us').classList.remove('hidden');
        document.getElementById('overlay').classList.remove('hidden');
    });

    closePopupButton.addEventListener('click', () => {
        document.getElementById('join-us').classList.add('hidden');
        document.getElementById('overlay').classList.add('hidden');
    });
});
