function muestraconjuntocerrado(id,rb){
	if (document.getElementById){ 
		var el = document.getElementById(id); 
		el.style.display = (rb == 'No') ? 'block' : 'none'; 
	}
}

function muestraotrocc(id,rb){
	if (document.getElementById){ 
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestranuevo(ida,idn,rb){
	if (document.getElementById){
		var el = document.getElementById(idn); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
		var ele = document.getElementById(ida); 
		ele.style.display = (rb == 'Si') ? 'none' : 'block'; 
	}
}

function muestraredpublica(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestraplantaelectrica(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestratransformadorpropio(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestrasistemagas(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestratanquealmacenamiento(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestrautilizacilindros(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestraaireacondicionado(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestratorreenfriamiento(id,rb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (rb == 'Si') ? 'block' : 'none'; 
	}
}

function muestramantenimientoinstalacionesfisicas(id,cb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (cb != '') ? 'block' : 'none'; 
	}
}

function muestramantenimientoplantaelectrica(id,cb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (cb != '') ? 'block' : 'none'; 
	}
}

function muestramantenimientosubestacionelectrica(id,cb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (cb != '') ? 'block' : 'none'; 
	}
}

function muestramantenimientotransformadorpropio(id,cb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (cb != '') ? 'block' : 'none'; 
	}
}

function muestramantenimientosistemagas(id,cb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (cb != '') ? 'block' : 'none'; 
	}
}

function muestramantenimientoascensores(id,cb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (cb != '') ? 'block' : 'none'; 
	}
}

function muestramantenimientodispositivosseguridad(id,cb){
	if (document.getElementById){
		var el = document.getElementById(id); 
		el.style.display = (cb != '') ? 'block' : 'none'; 
	}
}

