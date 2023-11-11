export const PAGE_ID = $('#lk-header').attr('data-page-id')
export const USER = parseObject($('#lk-header').attr('data-user'))
//export const USER_ID = $('#lk-header').attr('data-user-id')

export function parseObject(str, d = {}) {
	try {
		//console.log({str})
		if(str) {
			return JSON.parse(str)
		}
		return d
	} catch(e) {
		console.log(e)
		return d
	}
}


export function debounce(fn, wait) {
    let timer;
   return function(...args){
     if(timer) {
        clearTimeout(timer); // clear any pre-existing timer
     }
     const context = this; // get the current context
     timer = setTimeout(()=>{
        fn.apply(context, args); // call the function if time expires
     }, wait);
   }
}

export async function uploadImage(e) {
	try {
	// добавить эту функцию на обработчик @change к input[type="file"]
	let img = e.target.files[0]
	let formData = new FormData()
	formData.append("file", img)
	return await fetch('/user/upload_images', {
		method: "POST", body: formData
	}).then(r => r.json())
		.then(data => {
			if(data.error) throw new Error(data.error)
			return data.fileName
		})
	} catch(error) {
		console.log(error)
		throw error
	}
}

export async function uploadFile(e) {
	try {
	// добавить эту функцию на обработчик @change к input[type="file"]
	let img = e.target.files[0]
	let formData = new FormData()
	formData.append("file", img)
	return await fetch('/user/upload_documents', {
		method: "POST", body: formData
	}).then(r => r.json())
		.then(data => {
			if(data.error) throw new Error(data.error)
			return data.fileName
		})
	} catch(error) {
		console.log(error)
		throw error
	}
}