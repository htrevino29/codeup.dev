(function(){
    "use strict";

    var planetsString = "Mercury|Venus|Earth|Mars|Jupiter|Saturn|Uranus|Neptune";
    var planetsArray;

    // TODO: Convert planetsString to an array, save it to planetsArray.
    console.log(planetsString);

    var planetsArray =planetsString.split('|');

    console.log(planetsArray);
    console.log("---- ---- --- -- - - - -- -- -- -- - - - -");
    // TODO: Create a string with <br> tags between each planet. console.log() your results.
    //       Why might this be useful?
   
    var planetsWithBreak = planetsArray.join('<br>');
    console.log(planetsWithBreak);
    
    // Bonus: Create a second string that would display your planets in an undordered list.
    //        You will need an opening AND closing <ul> tags around the entire string, and <li> tags around each planet.
    //        console.log() your results.
    console.log("----BONUS----");

    var secondString = planetsArray.join("</li><li>");
    console.log(secondString);
    planetsArray.push("<ul><li>");
    secondString.push("</li></ul>")

    console.log(secondString);
})();