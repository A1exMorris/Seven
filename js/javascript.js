/*Колонки одной высоты*/
function setEqualHeight(columns)
{if ($(document).width()>900){
    var tallestcolumn = 0;
    columns.each(
        function()
        {
            currentHeight = $(this).height();
            if(currentHeight > tallestcolumn)
            {
                tallestcolumn = currentHeight;
            }
        }
    );
    columns.height(tallestcolumn);}
}

$(document).ready(
    function() {
    setEqualHeight($(".equalHeight > div"));
}

);