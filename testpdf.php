<?php

include("MPDF/mpdf.php");
$mpdf=new mPDF('utf-8');

$html = "
    <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
<style>
p{font-family: \"Arial\", sans-serif}
</style>
<p> قال الرئيس الامريكي جورج بوش في حديث متلفز في الذكرى الرابعة للغزو الامريكي للعراق ان الاولوية حاليا لاعادة الامن للعراق.</p>
<p> هل ستسفر الجهود الدبلوماسية الجارية عن حلول؟ وكيف تنظر للاتهامات لبعض هذه الدول بالتدخل في الشأن العراقي، والتورط في دعم عمليات العنف؟ والى اي مدى يبدو الوضع في العراق انعكاسا للصراعات الإقليمية في المنطقة؟</p>
<p> وادان البيت الابيض \"بشدة\" تفجير ايلات فيما اعربت وزارة الخارجية الروسية عن \"ادانتها الشديدة\" للحادث\" واصفة اياه بـ\"المتطرف\" الذي استهدف \"مدنيين مسالمين\".</p>

<br>
<br>
<br>

<p> $name </p>
";

//$html = iconv("windows-1256","UTF-8",$html);
$mpdf=new mPDF('ar','A4','','',32,25,27,25,16,13);
// From mPDF 5.1 onwards you must set:
$mpdf->SetDirectionality('rtl');
$mpdf->mirrorMargins = true;
//$mpdf->SetDisplayMode('fullpage');
//$mpdf->WriteHTML($stylesheet,1);  // The parameter 1 tells that this is css/style only and no body/html/text
$mpdf->WriteHTML($html);

$mpdf->Output();