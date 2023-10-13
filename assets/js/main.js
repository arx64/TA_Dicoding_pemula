 const url = "https://data.bmkg.go.id/DataMKG/TEWS/autogempa.json";
  // Fetch the JSON data
  fetch(url)
    .then(response => response.json())
    .then(data => {
        let dataArr = new Array(data.Infogempa.gempa);
        let data_new = new Array(dataArr[0]);
      // Select the div to display the JSON data
      const resultsDiv = document.querySelector('.isi-data');


       // Loop through the JSON data and construct HTML for display
    //   let html = '<h2>Earthquake Data:</h2>';
    let html = '';
      data_new.forEach(earthquake => {
        document.getElementById("shakemap-img").src = 'https://data.bmkg.go.id/DataMKG/TEWS/' + earthquake.Shakemap;
        document.getElementById("shakemap-link").href = 'https://data.bmkg.go.id/DataMKG/TEWS/' + earthquake.Shakemap;
        console.log(data_new)
        html += `<p class="isi-js">Tanggal: ${earthquake.Tanggal}</p>`;
        html += `<p class="isi-js">Jam: ${earthquake.Jam}</p>`;
        html += `<p class="isi-js">Lintang: ${earthquake.Lintang}</p>`;
        html += `<p class="isi-js">Bujur: ${earthquake.Bujur}</p>`;
        html += `<p class="isi-js">Magnitude: ${earthquake.Magnitude}</p>`;
        html += `<p class="isi-js">Kedalaman: ${earthquake.Kedalaman}</p>`;
        html += `<p class="isi-js">Wilayah: ${earthquake.Wilayah}</p>`;
        html += `<p class="isi-js">Potensi: ${earthquake.Potensi}</p>`;
        html += `<p class="isi-js">Dirasakan: ${earthquake.Dirasakan}</p>`;
        html += '<hr>';
      });

      // Update the HTML of the results div
      resultsDiv.innerHTML = html;
    })
    .catch(error => console.error('Error fetching data: ', error));