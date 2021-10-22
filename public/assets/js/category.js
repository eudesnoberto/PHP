import http from './http';
	async function Subcat(){
		try{

			const {data} = await http.get('/subquestion/'+1);
			console.log(data)

		}catch(error){
			console.log(error);
		}
	}

export default Subcat;