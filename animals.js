
	const animalGenderIDs = {
    "Shark-male": 101, "Shark-female": 102,
    "Dolphin-male": 103, "Dolphin-female": 104,
    "Whale-male": 105, "Whale-female": 106,
    "Octopus-male": 107, "Octopus-female": 108,
    "SeaTurtle-male": 109, "SeaTurtle-female": 110,
    "Jellyfish-male": 111, "Jellyfish-female": 112,
    "Clownfish-male": 113, "Clownfish-female": 114,
    "Seahorse-male": 115, "Seahorse-female": 116,
    "Stingray-male": 117, "Stingray-female": 118,
    "MantaRay-male": 119, "MantaRay-female": 120,
    "Pufferfish-male": 121, "Pufferfish-female": 122,
    "Eel-male": 123, "Eel-female": 124,
    "Squid-male": 125, "Squid-female": 126,
    "Crab-male": 127, "Crab-female": 128,
    "Lobster-male": 129, "Lobster-female": 130,
    "Starfish-male": 131, "Starfish-female": 132,
    "Coral-male": 133, "Coral-female": 134,
    "Seal-male": 135, "Seal-female": 136,
    "Walrus-male": 137, "Walrus-female": 138,
    "Penguin-male": 139, "Penguin-female": 140,
    "Narwhal-male": 141, "Narwhal-female": 142,
    "Swordfish-male": 143, "Swordfish-female": 144,
    "Barracuda-male": 145, "Barracuda-female": 146,
    "Anglerfish-male": 147, "Anglerfish-female": 148,
    "MorayEel-male": 149, "MorayEel-female": 150,
    "BlueTang-male": 151, "BlueTang-female": 152,
    "HammerheadShark-male": 153, "HammerheadShark-female": 154,
    "Orca-male": 155, "Orca-female": 156
};

function updateAnimalID() {  
    const animal = document.getElementById("AquaticAnimal").value;
    const gender = document.getElementById("gender").value;
    const animalID = animalGenderIDs[`${animal}-${gender}`]||"000"; // Default ID if not found
    document.getElementById("animal_id").value = animalID;
}

// document.getElementById("gender").addEventListener("change", function(event) {
//     var animal = document.getElementById("AquaticAnimal").value;
//     var gender = document.getElementById("gender").value;
//     var animalID = animalGenderIDs[`${animal}-${gender}`]||"000"; // Default ID if not found
//     document.getElementById("animal_id").value = animalID;   
// });

// document.getElementById("AquaticAnimal").addEventListener("change", function(event) {
//     var animal = document.getElementById("AquaticAnimal").value;
//     var gender = document.getElementById("gender").value;
//     var animalID = animalGenderIDs[`${animal}-${gender}`]||"000"; // Default ID if not found
//     document.getElementById("animal_id").value = animalID;    
// });
