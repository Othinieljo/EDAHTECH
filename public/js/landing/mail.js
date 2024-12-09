async function handleEmailSubmission() {
    const emailInput = document.getElementById("emailInput");
    const submitButton = document.getElementById("submitButton");
    const buttonText = document.getElementById("buttonText");
    const loader = document.getElementById("loader");

    // Vérifier si l'email est valide
    const email = emailInput.value.trim();
    if (!email || !validateEmail(email)) {
        alert("Veuillez entrer un email valide.");
        return;
    }

    // Désactiver le bouton et afficher le loader
    submitButton.disabled = true;
    buttonText.classList.add("hidden");
    loader.classList.remove("hidden");

    try {
        // Envoyer la requête POST
        const response = await fetch('/contacts', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
               
            },
            body: JSON.stringify({ email, type: 'newsletter' }),
        });

        const result = await response.json();

        if (response.ok) {
            alert(result.message || `Email "${email}" enregistré avec succès !, ${response.status}`);
            emailInput.value = ""; // Réinitialiser le champ
        } else {
            alert(result.message || "Une erreur s'est produite lors de l'enregistrement.");
        }
    } catch (error) {
        console.error("Erreur :", error);
        alert("Une erreur inattendue s'est produite. Veuillez réessayer.");
    } finally {
        // Réactiver le bouton et masquer le loader
        submitButton.disabled = false;
        buttonText.classList.remove("hidden");
        loader.classList.add("hidden");
    }
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
