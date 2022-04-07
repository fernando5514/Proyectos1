

window.addEventListener('load', function() {
    alert('Los números se escribirán como X.X  EJEMPLO => "5.5", "1.3"');
});

var button = document.getElementById("botoncalcular");

button.onclick = function(){
    var consumo = document.getElementById("input-consumo").value;
    var precio = document.getElementById("input-precio").value;
    var imp_circ = document.getElementById("input-imp-circ").value;
    var consumoe = document.getElementById("input-consumoe").value;
    var precioe = document.getElementById("input-precioe").value;
    var imp_circe = document.getElementById("input-imp-circe").value;
    var km = document.getElementById("km").value;
    var consumo_total_comb;
    var consumo_total_electrico;
    var ahorro;
    
    consumo_total_comb=((km/consumo)*precio) + Number(imp_circ);
    consumo_total_electrico=km/consumoe*precioe;
    consumo_total_electrico=consumo_total_electrico+ Number(imp_circe);
    ahorro=consumo_total_comb-consumo_total_electrico;
    if(consumo_total_comb>0){
        document.getElementById("consumo-texto").innerHTML="Consumo total de combustible: "+consumo_total_comb.toFixed(2)+"€";
    }
    if(consumo_total_electrico>0){
        document.getElementById("consumoe-texto").innerHTML="Consumo total de electricidad: "+consumo_total_electrico.toFixed(2)+"€";
    }
    if(ahorro>0){
        document.getElementById("ahorro-texto").innerHTML="Ahorro: "+ahorro.toFixed(2)+"€";
    }
}
