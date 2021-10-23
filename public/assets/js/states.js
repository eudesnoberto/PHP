import	http from './http';

export default async function states() {
	try{
		const  {data}  = await http.get("/api/states");

		const states = document.querySelector("#states"); 
		
	
		data.forEach((state) => {
			states.appendChild(new Option(state.name_category, state.id_category));
		});

 
		console.log(data);
	} catch (error) {
		console.log(error);
	}
}