{
    const openModalButton = document.querySelector("#abrirpf");
    const closeModalButton = document.querySelector("#fecharpf");
    const modal = document.querySelector("#modalpf");
    const fade = document.querySelector("#fundopf");
    
    const toggleModal = () => {
      modal.classList.toggle("hidepf");
      fade.classList.toggle("hidepf");
    };
    
    [openModalButton, closeModalButton, fade].forEach((el) => {
      el.addEventListener("click", () => toggleModal());
    });
    }