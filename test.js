// Assuming click_to_convert is the ID of an HTML element
var click_to_convert = document.getElementById('click_to_convert');

// Define a function to be called when the element is clicked
function handleClick(event) {
    var speech = true; // Corrected variable name from "sppech" to "speech"
    
    // Corrected the Web Speech API property name from "webkitSpeechRecoginition" to "webkitSpeechRecognition"
    window.SpeechRecognition = window.webkitSpeechRecognition; 

    const recognition = new SpeechRecognition(); // Corrected variable name from "recogntion" to "recognition"
    recognition.interimResults = true;

    recognition.addEventListener('result', e => {
        const transcript = Array.from(e.results)
            .map(result => result[0]) // Corrected variable name from "results" to "result"
            .map(result => result.transcript)
            .join(''); // Joined the array of transcript parts into a single string

        // Assuming convert_text is the ID of an HTML element where you want to display the recognized text
        var convert_text = document.getElementById('searchInput');
        convert_text.innerHTML = "transcript";                                                                                                                          
    });

    if (speech == true) {
        recognition.start();
    }
}
// Add a click event listener to the element
click_to_convert.addEventListener('click', handleClick);
