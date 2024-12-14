async function handleEmailSubmission(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    const emailInput = document.getElementById("emailInput");
    const submitButton = document.getElementById("submitButton");
    const buttonText = document.getElementById("buttonText");
    const loader = document.getElementById("loader1");

    const email = emailInput.value.trim();
    if (!validateEmail(email)) {
        alert("Veuillez entrer un email valide.");
        return;
    }

    submitButton.disabled = true;
    buttonText.classList.add("hidden");
    loader.classList.remove("hidden");

    try {
        const csrfToken = document.querySelector('input[name="_token"]').value;

        const response = await fetch('/contacts', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken, // Inclus le token CSRF
            },
            body: JSON.stringify({ email, type: 'newsletter' }),
        });

        const result = await response.json();

        // if (response.ok) {
        //     alert(result.message || `Email "${email}" enregistré avec succès !`);
        //     emailInput.value = "";
        // } else {
        //     alert(result.message || "Une erreur s'est produite.");
        // }
    } catch (error) {
        // console.error("Erreur :", error);
        // alert("Une erreur inattendue s'est produite.");
    } finally {
        submitButton.disabled = false;
        buttonText.classList.remove("hidden");
        loader.classList.add("hidden");
    }
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
