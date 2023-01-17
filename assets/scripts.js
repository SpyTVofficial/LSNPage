function faq(ele)
{
    var x = ele.parentElement.nextElementSibling.style.cssText;
    if(x=='max-height: 500px;')
    {
        ele.style.cssText='transform: rotate(0deg);';
        ele.parentElement.nextElementSibling.style.cssText = "transition:0.3s;max-height:0px;";
    }
    else
    {
        ele.style.cssText='transform: rotate(45deg);';
        ele.parentElement.nextElementSibling.style.cssText = "max-height:500px;";
    }
}