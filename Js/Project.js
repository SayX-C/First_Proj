const apiKey = "OT18kUoMTgi3Kxa1eTaO1rQrkXDfu2djx9xfJbYy";
const api_url = `https://api.nasa.gov/planetary/apod?api_key=${apiKey}`;

console.log(api_url);
fetch(api_url,
	{
		method: "GET",
		headers: {
			"Content-Type": "application/json",
		},
	})
	.then(response => {
		return response.text();
	}).then(data => {
		console.log(data);
		let obj = JSON.parse(data);
		console.log(obj);
		let img_url = obj.hdurl;
		console.log(img_url);
	})
	.catch(error => {
		console.log(error);
	})


