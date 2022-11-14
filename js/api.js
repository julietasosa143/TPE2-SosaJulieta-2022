"use strict"

const URL = "api/reviews/";

let reviews = [];

let form = document.querySelector('#reviewForm');
form.addEventListener('submit', addReview);

async function getAll() {
    try {
        let response = await fetch(URL);
        if (!response.ok) {
            throw new Error('Recurso no existe');
        }
        tasks = await response.json();
    } catch(e) {
        console.log(e);
    }
}
async function getReviews() {
    try {
      let id = e.target.dataset.review;
      let response = await fetch(URL+ "/" + id);
      let reviews = await response.json();
  
      console.log(reviews);
  
      app.reviews = reviews;
  
      console.log(id_);
    } catch (error) {
      console.log(error);
    }
  }
async function insertReview(e) {
    e.preventDefault();
    
    let data = new FormData(form);
    let review = {
        id_review: null,
        review: data.get('reviewBody'),
        estrellas: data.get('estrellas'),
        item: data.get('item'),
    };

    try {
        let response = await fetch(URL, {
            method: "POST",
            headers: { 'Content-Type': 'application/json'},
            body: JSON.stringify(review)
        });
        if (!response.ok) {
            throw new Error('Error del servidor');
        }

        let nReview = await response.json();

        // inserto la tarea nuevo
        reviews.push(nReview);
        showReviews();

        form.reset();
    } catch(e) {
        console.log(e);
    }
} 

async function deleteReview(e) {
    e.preventDefault();
    try {
        let id = e.target.dataset.review;
        let response = await fetch(URL + id, {method: 'DELETE'});
        if (!response.ok) {
            throw new Error('Recurso no existe');
        }

        // eliminar la tarea del arreglo global
        reviews = reviews.filter(review => review.id != id);
        showReviews();
    } catch(e) {
        console.log(e);
    }
}

function showReviews() {
    let reviews = document.querySelector("#reviewContainer");
    reviews.innerHTML = "";
    for (const review of reviews) {

        let html = `
            <div class="mb-3">
                <p>Un usuario anonimo dijo</p>
                <p>${review.review}</p>
                <p>${review.punctuation} estrellas/p>
                <p>Del producto ${review.item}<>
                <a href='#' data-review="${review.id}" type='button' class='btn-delete'>Borrar</a>
            </div>
        `;

        reviews.innerHTML += html;
    }
    const btnsDelete = document.querySelectorAll('btn-delete');
    for (const btnDelete of btnsDelete) {
        btnDelete.addEventListener('click', deleteReview());
    }
}

getReviews();