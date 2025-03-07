function updateAnimalLocation() {
   
     animal = document.getElementById("AquaticAnimal").value;
     locationDisplay = document.getElementById("location");

   
    if (animal === "Shark") {
        locationDisplay.textContent = "The Shark is found in Australia.";
    } else if (animal === "Dolphin") {
        locationDisplay.textContent = "The Dolphin is found in the Atlantic Ocean.";
    } else if (animal === "Whale") {
        locationDisplay.textContent = "The Whale is found in the Arctic Ocean.";
    } else if (animal === "Octopus") {
        locationDisplay.textContent = "The Octopus is found in the Mediterranean Sea.";
    } else if (animal === "SeaTurtle") {
        locationDisplay.textContent = "The Sea Turtle is found in the Caribbean.";
    } else if (animal === "Jellyfish") {
        locationDisplay.textContent = "The Jellyfish is found in the Pacific Ocean.";
    } else if (animal === "Clownfish") {
        locationDisplay.textContent = "The Clownfish is found in the Great Barrier Reef.";
    } else if (animal === "Seahorse") {
        locationDisplay.textContent = "The Seahorse is found in the Indo-Pacific region.";
    } else if (animal === "Stingray") {
        locationDisplay.textContent = "The Stingray is found in tropical waters worldwide.";
    } else if (animal === "MantaRay") {
        locationDisplay.textContent = "The Manta Ray is found in the Indo-Pacific.";
    } else {
        locationDisplay.textContent = "Location information not available.";
    }
}