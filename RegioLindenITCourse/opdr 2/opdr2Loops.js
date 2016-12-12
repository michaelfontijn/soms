/**
 * Created by mich2 on 10-12-2016.
 */



function FillYear()
{
    var year = document.getElementById('selectyear');
    if(year)
    {
        for(var i = 0; i <=100; i++)
        {
            var option = document.createElement('option');
            option.text = option.value = i;

            year.add(option,0)
        }
    }
    else{
        document.write('year bestaat helemaal niet')
    }
}

function FillDay(){
    var day = document.getElementById('selectday');
    if(day)
    {
        for(var i = 0; i <=100; i++)
        {
            var option = document.createElement('option');
            option.text = option.value = i;

            day.add(option,0)
        }
    }
    else{
        document.write('Day bestaat niet :P!');
    }
}

function FillMonth(){
    var month = document.getElementById('selectmonth');
    if(month)
    {
        for(var i = 0; i <=100; i++)
        {
            var option = document.createElement('option');
            option.text = option.value = i;

            month.add(option,0)
        }
    }
    else
    {
        document.write('month bestaat helemaal nietes! soms kappa123')
    }
}

window.onload=function()
{
    window.alert("HOI");
    FillYear();
    FillMonth();
    FillDay();

}

var btnDoMagic = document.querySelector('btnDoMagic');

btnDoMagic.onclick=function()
{
    FillYear();
    window.alert('YOUMAMAM');
    document.write('soms');
}
