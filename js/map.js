// initialisation des Headers

const map = L.map('map').setView([48.856614, 2.866], 13);

// Layer la carte et la couche 
// attribution pour dire qui a fait la carte
// .addTo = ajouter a la carte
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: 'Allan'
}).addTo(map);


// var myHeaders = new Headers();
// myHeaders.append("User-Agent", "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.95 Safari/537.36");
// myHeaders.append("Content-Type", "application/x-www-form-urlencoded");

// // object de code
// var requestOptions = {
//     method: 'GET',
//     headers: myHeaders,
//     redirect: 'follow'
// };

// // object fetch promesse donc mettre then ou catch
// fetch("https://api-adresse.data.gouv.fr/search/?q=paris", requestOptions)
//     // async / await est un autre type de promesse
//     .then(async (response) => {
//         // try catch = esssaye ou capte l'erreur.
//         try {
//             // récupération des datas sur github
//             const data = await response.json()
//             console.log(data)
//             // On créer notre carte 
//             // map = id de la div 
//             // setView l'endroit ou afficher la carte
//             // 13 = zoom sur la carte
//             const map = L.map('map').setView([48.856614, 2.866], 13);

//             // Layer la carte et la couche 
//             // attribution pour dire qui a fait la carte
//             // .addTo = ajouter a la carte
//             L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
//                 attribution: 'Allan'
//             }).addTo(map);

//             // data features = tableau des valeur on le map pour afficher si plusieurs valeur 
//             var dataFeatures = data.features.map((v, k) => {
//                 L.marker(v.geometry.coordinates.reverse())
//                     .addTo(map)
//                     .bindPopup('Prout')
//                     .openPopup();
//                 return v
//             })
//         } catch (e) {
//             console.log(e);
//         }
//     })
//     .catch(error => console.log('error', error));