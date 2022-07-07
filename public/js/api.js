console.log("JavaScript is working!");

async function init() {
  const data = await getFireballData();
}

async function getFireballData() {
    try {
      let response = await fetch("https://ssd-api.jpl.nasa.gov/fireball.api?limit=20");
      let data = await response.json();
      console.log(data)
      return data;
    } catch (err) {
      console.error("Error: ", err);
    }
  }
  
  init();
  