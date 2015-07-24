<script type="text/javascript">
/** 
 * Required in order for the ipad to open links within the same application, 
 * and not a new Safari window.
 */
var a=document.getElementsByTagName("a");
for(var i=0;i<a.length;i++)
{
    a[i].onclick=function()
    {
        window.location=this.getAttribute("href");
        return false
    }
}
</script>
