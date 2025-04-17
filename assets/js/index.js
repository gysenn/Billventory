// Function to show the slider menu
function display_slider() {
    const sliderMenu = document.querySelector('.slider-menu');
    sliderMenu.classList.add('active'); // Show the slider menu
}

// Function to hide the slider menu
function hide_slider() {
    const sliderMenu = document.querySelector('.slider-menu');
    sliderMenu.classList.remove('active'); // Hide the slider menu
}

// Event listener to detect clicks outside the slider menu
document.addEventListener('click', function(event) {
    const sliderMenu = document.querySelector('.slider-menu');
    const menuButton = document.querySelector('.menu');
    
    // Check if the click was outside the slider menu and the menu button
    if (!sliderMenu.contains(event.target) && !menuButton.contains(event.target)) {
        sliderMenu.classList.remove('active'); // Hide the menu if clicked outside
    }


});
