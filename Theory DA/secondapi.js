const secondapi = async () => { 
    const response = await fetch("./data.json"); 
    const data = await response.json(); 

    //get the districts, recovered and infected details from json file
    var districts = []
    var recovered = []
    var infected = []
    data.map((d,idx) => districts[idx]=d.district)
    data.map((d, idx) => recovered[idx]=d.recovered)
    data.map((d, idx) => infected[idx]=d.infected)

    //getting the value of state by user
    let recoveredcount = 0;
    let infectedcount = 0;
    let state = String(document.getElementById("state").value);

    //add reovered and infected details of given state
    if (state === "uttar pradesh") {
        for (var i=0; i<5; i++) {
            recoveredcount += recovered[i]
            infectedcount += infected[i]
        }
    }
    if (state === "tamil nadu") {
        for (var i=5; i<10; i++) {
            recoveredcount += recovered[i]
            infectedcount += infected[i]
        }
    }
    if (state === "maharashtra") {
        for (var i=10; i<15; i++) {
            recoveredcount += recovered[i]
            infectedcount += infected[i]
        }
    }

    //printing 
    document.getElementById("recoverycount").innerHTML = recoveredcount;
    document.getElementById("infectcount").innerHTML = infectedcount;
}