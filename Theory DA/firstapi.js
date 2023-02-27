const firstapi = async () => { 
    const response = await fetch("./data.json"); 
    const data = await response.json();  

    //get the districts and vaccinated details from json file
    var vaccinated = []
    var districts = []
    data.map((d,idx) => districts[idx]=d.district)
    data.map((d,idx) => vaccinated[idx]=d.vaccinated)

    //sort the data according to descending vaccination details
    for (var i=0; i<vaccinated.length; i++) {
        for (var j=0; j<(vaccinated.length-i-1); j++) {
            if (vaccinated[j]<vaccinated[j+1]) {
                var temp1 = vaccinated[j]
                vaccinated[j] = vaccinated[j + 1]
                vaccinated[j+1] = temp1
                var temp2 = districts[j]
                districts[j] = districts[j + 1]
                districts[j+1] = temp2
            }
        }
    }

    //print the top 10 vaccinated district names
    document.getElementById("p0").innerHTML = districts[0];
    document.getElementById("p1").innerHTML = districts[1];
    document.getElementById("p2").innerHTML = districts[2];
    document.getElementById("p3").innerHTML = districts[3];
    document.getElementById("p4").innerHTML = districts[4];
    document.getElementById("p5").innerHTML = districts[5];
    document.getElementById("p6").innerHTML = districts[6];
    document.getElementById("p7").innerHTML = districts[7];
    document.getElementById("p8").innerHTML = districts[8];
    document.getElementById("p9").innerHTML = districts[9];


};
