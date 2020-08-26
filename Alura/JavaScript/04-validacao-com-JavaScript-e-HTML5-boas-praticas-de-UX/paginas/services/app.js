window.onload = () => {
    const inputs = document.querySelectorAll("input");
    
    inputs.forEach(input => {
        input.addEventListener("inout", () => {
            alert("Ola");
        });
    });
}; 