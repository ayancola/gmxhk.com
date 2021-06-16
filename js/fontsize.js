var dis_c_id = 1;

function setFos(sid){

	if(sid != dis_c_id){

		document.getElementById('nc').className="nf"+sid;

		document.getElementById('nf'+dis_c_id).className="";

		document.getElementById('nf'+sid).className="nf_on";

		dis_c_id = sid;

	}

}
setFos(2);