$(document).ready(function() {
    // Function to show the corresponding section based on the clicked button
    function showSection(section) {
        // Hide all sections
        $('.information-area > div').hide();
        // Show the selected section
        $(section).show();
    }

    // Function to update the background gradient of the corresponding div
    function updateBackground() {
        // Remove the background gradient from all divs
        $('.information-option div div').css({
            'background': 'linear-gradient(to top, #003676, #0E71E4)',
            'box-shadow': '0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19)'
        });
        // Add the background gradient to the corresponding div
        $('.information-option input[type="radio"]:checked').each(function() {
            var $div = $(this).closest('.information-option').find('label[for="' + this.id + '"]').closest('div div');
            $div.css({
                'background': 'linear-gradient(to top, #75AAE8, #0075FF)',
                'box-shadow': '0 0px 0 0 rgba(0,0,0,0.3), 0  0 0 rgba(0,0,0,0.25)'
            });   
        });
    }

    // Add click event listeners to all the buttons
    $('.information-option input[type="radio"]').click(function() {
        // Show the corresponding section based on the button's ID
        if ($(this).attr('id') === 'tap1') {
            showSection('.requirement-info');
        } else if ($(this).attr('id') === 'tap2') {
            showSection('.procedure-info');
        } else if ($(this).attr('id') === 'tap3') {
            showSection('.location-info');
        } else if ($(this).attr('id') === 'tap4') {
            showSection('.fee-info');
        } else if ($(this).attr('id') === 'tap5') {
            showSection('.samplephoto-info');
        } else if ($(this).attr('id') === 'tap6') {
            showSection('.reference-info');
        }

        // Update the background gradient
        updateBackground();
    });

    // Initially show the first section and update the background
    showSection('.requirement-info');
    updateBackground();
});
