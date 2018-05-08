<html> 
<head> 
<title>MMWCA BI</title> 

<script type="text/javascript"
	src="http://maps.google.com/maps/api/js?key=AIzaSyDP63aXl_F57f5AsAyx7Arh_IeS9Fzz62A&sensor=false&libraries=geometry"></script>

  
	<script src="https://cdn.rawgit.com/googlemaps/js-map-label/gh-pages/src/maplabel.js"></script>
    

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/custom.css';?>">
<!--  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->

      
<style type="text/css"> 
#map {
        height:100%;
        width: 100%;
        float: right;
      
      
      }
</style> 
<script type='text/javascript'>
function initialize() {
    // var myLatlng = new google.maps.LatLng(-1.2363001159413578,35.41239599609378);
     // var myLatlng = new google.maps.LatLng(-1.2157054665044504,35.31077246093753);
     var myLatlng = new google.maps.LatLng(-1.2184514288973232,35.24622778320315)
    var myOptions = {
        zoom: 10.7,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
        
   





    //naboisho conservancy 
	var mara_naboisho_conservancy_region="bnkGgbawE`\\pUzPbNfyBfFvv@nBf]eQtAg@h\\eCd}@vI`@_BlL~IpNhw@da@re@sYhp@jT|[vKtg@t@jSxBpp@tX~MjS~[pe@tItHzZpQbd@zPtc@cBvt@fn@~cBqu@cPoi@fe@ezGp`G|f@`{@o|BloByBxAaTL}DPkDD}Cw@cFaBmOcGaToHwGwBiJ_FkIoG{U{RcBkByByBk@gAeAyAuAYuAJeSjDiVdDuBHaBi@cByAeAoBgBsEaAqB}@{AwAsBiFoEiOiLy@i@gKkGyC_D{CyD_IcJaDaDm@g@aG{IqB}BiA_AqJkEs`@{OqHqC{IcDqS{GiZkKcOeFoD_AeE_A}AW_VqBkL}@mAMrGic@oe@gPfjAahBxgBqGv_CefCsi@g_AbGgg@fK_Ph@kM`GeKmNkIuL|B}Ue_@{FaVe@eLqEaSaCi`@aMaIuEyd@}B}GgEyQy^ki@qNse@mT}HsD{OaRmNoHsUwcCwE{i@s^fz@}jAdEeTbH}EImWlPyRrZz@xk@fNnN}L|m@nBt`Al}AlP`KnIlPvMcDlM{@zZyCnQvB|HfJhRyGfMfJlI}HXo@dIpA"; 
	var mara_naboisho_conservancy_region_path = google.maps.geometry.encoding.decodePath(mara_naboisho_conservancy_region);
	var mara_naboisho_conservancy_region_shape = new google.maps.Polygon({ paths: mara_naboisho_conservancy_region_path, strokeColor: '#000000', strokeOpacity: 0.5, strokeWeight: 1, fillColor: '#70c6a4', fillOpacity: 0.5, });
    mara_naboisho_conservancy_region_shape.setMap(map);
    attachLabelPolygon(mara_naboisho_conservancy_region_path,"");

    //maasai mara national reserve
    /*
	var maasai_mara_national_reserve_region ="jrtFub~tEhzNemRzoIiaLnObHlL~FtHrGfHbStCjH|GzEzI`FjDdHvQvJ~EtIp@zK`FtGvJjDfYlFvWbAdQbOjHvRpKfWzCfVlE`YtIfBzKa@vIeBPaNoFiYdIgCpGuHxJyC|EcHr@eIhDiEpF}JoEyJ_GoU`@{KpEpCvDyFnIK|H_JaGaO|^nFuDeRnTzFlOiIrM_YjZqGjDyJhKsHvLqX`DuIzEiNeBia@xJcPiRiRyKgIuAgJlMcOuIyJlEyJhKqH{DyJgBkKvIwWdPeY?oMsGyJ_F{RiUyOgf@{UvfAg|@nMkLfrKscJnuHkmGvP?j`AlXtBt@fMzEzQxBdSoCdb@zEtZrGte@eLnYkAxTh]rLfRlIxJjHxMxHpCtAj@fDjA`PjFd]bQzEpBxUlKd@Pth@b@zYrSzTvJvHbDjErNxTjHBrRu@fSbP~A]`MyDvJyDtNmB|OFbOxDpNjGlEuAtLpa@nBf`@oBvQpGrN~Jfa@lS|LlDnNjAl]yFhZeN`VuSt[Xb[zDt_@iLgv{@nrjB[i@ibA}{@wx@yeA}PuT{VuZel@od@sDoCAEa@[wQ}x@s^aOdJ_c@q^gJcm@or@eAiT}Qic@oAqCoZat@o^q\\rGiMe[cu@oLkm@k`@gQe@aAoG}CkMuc@_E_JsV_NrNwHqI}YqZoWxJwJc{@k`BqGuDcImWef@q~@m{@{x@if@yY}CgD{ToKwTc\\wM}GwZkD_[oF`@cOrHaOcPmEoFdPyJvJmTuIwIqU{Z`@sV}LU{cAmOm^s@{i@pOs_AcBofH";
	var maasai_mara_national_reserve_region_path = google.maps.geometry.encoding.decodePath(maasai_mara_national_reserve_region);
	var maasai_mara_national_reserve_region_shape = new google.maps.Polygon({ paths: maasai_mara_national_reserve_region_path, strokeColor: '#000000', strokeOpacity: 0.5, strokeWeight: 1, fillColor: '#000000', fillOpacity: 0.5, zIndex:90 });
	maasai_mara_national_reserve_region_shape.setMap(map);*/
    
    //mara north conservancy
	var mara_north_conservancy_region =  "h~dFwq}uEyG}XgHuXgA}De^{dAyGeO{@aHDaDd@iJLcBVqBrAgHn@_ELmCMaAk@qAmAyB_G_JqAmC}JkMoBoCI\\aAr@u@X{@b@gAPmAFeBCiCOkFSaRi@yFDoId@sHJsCt@}G~CwAbAoBr@{CzAeE~CFd@{Ap@o[kuAu}A|H}yAxHuR`A}B@em@g`A_QeWx@y|AAie@bZvQhGxBnlAyaCzy@tg@rC{J~HmPa@mCq@cCvg@h@xB}e@nZhBdBm`@bDjD`OiX~@aC`@mDEaUMwRAyJ@aI^mJG_J_@sGm@iEaAgBcEcE[OhIUYg@{AgBoBeBSKhf@y`@|i@gd@{@`h@nn@}JfLbm@jDNo@rg@ds@pBmCxrAio@iBg@fu@rkA|CmB~e@c@lHFzl@}XCRl}BrECEtp@rEXb@vn@}I@]|t@fBtoAbWJ~@xm@~Abo@dg@y@oCwEf_@mI`FsTx]aj@~DrIjM|X~LdZ~F`P`Tjm@tEzNpUgFfCq@VrABl@Ux@Gx@?b@P|@RZ^^fAv@Z`@DR?LOr@CZ@l@Jx@EVMLo@^UXM`@Af@GL?^H\\b@d@H@n@KL?RFD\\\\p@HHb@JLHVbASJOLKPCNBLj@l@x@^tBhIIb@@`@JX^T\\F`ADz@Tv@n@\\JVRV\\G|@e@v@O?CVIPe@XQTW~@A\\Df@HFj@[d@k@dAgAXFPJZHJR@JEL_@\\GTRf@Ot@u@r@QVBf@?d@Gp@Mj@Cj@FZVf@DPKt@VR`ALd@?l@RBVGNG\\?v@CVEN?XFn@Tt@LFj@MH?NPRr@\\^l@Lp@@l@LRRDf@Pb@Bb@Nn@?\\Kl@U`@aArAOl@F`AT~@v@`AB^Ab@g@rBAd@Fj@?j@OdCAdBWZFRCJWBCBAVDb@CVOHYBOZWVA`@FPb@j@DR?l@Z^DXBDV@XRLR@PCTMNUB[Ec@]OCMBOJCJbAr@N?XJZh@F`@JLl@Zd@@NJTd@HFNIJFTWND`@^ZPt{@gGvN``@NGFP`BKb@GbA]\\QXUFODYHMBIBUAYBQBGHEp@O\\J`@BLED]d@Ct@WhAHtAYdAc@d@Az@g@|s@oRCgDng@uGx|@uREzm@bx@~IsAxEddAv[fO~EnTxUvTs\\bA~@JLFNWp@DPNNv@TAp@FRZ\\DNCTDRx@d@FNBn@DFfA`AZd@ZNHHBPCj@B\\Rv@^b@B\\Nl@Fn@Nb@\\Rb@J^TNANIRYDA`@LRET@NNTO\\EVBPR`@FDV`@VH^FFF@Z@XEt@AxA@|A\\h@Av@Gb@MV]?KMg@BUNYXOZ?JC\\_@Zw@Di@HI~@a@H@PPJ@bAa@N?\\HJJLn@LVD@bABn@T\\?j@OT@TLJ?h@U~@BNL^L?RKRAFLL@DQRFNHDb@?FBBXHF`AFHALQ|@ADILEl@@JATGHAl@\\Rl@^ToC|V|WbDyGxr@]xCPF\\BPGR[J_@ROTGf@BVH`@^b@GNNHDTC`@MTHPRBLLBj@G^BVXR@PCXYXMb@EFG@e@`@@DC?[x@JJM@QhAgAR@XXTJ`@Ox@A^Op@R^EZU^g@l@KNIx@DsJp_@u@~B}OwI_n@r}@rKkB^nDZHTRJZGb@DVLRHFT?l@e@TAXFNV@ZCLW\\CT@TVf@x@XR?t@]b@s@RWVMp@C\\DRNBH?TCF_A?e@X?`@HNHDZ@\\Rl@FJFLZ?b@BDNB^KB@Bf@ZP_AE]Ag@HSLKVKJANR@DDB\\HN^EJBP`@FHJDVCHMF_@VUJ?RZHF~@?XZGPOPA`@FJHB\\G^Qv@Ql@EJ_@l@?NEFKE_APE^BVAZIb@CTMDUHE^ATN@VOXIH[JKLE\\FdA\\j@R?ZQz@}@f@AXHRNFNE|@ODGL?`@DH`@ZpAd@RPDH@TBHXNAf@c@PWPUZCR@ZJVXN\\F\\@ZHRCPO|@?FCJWb@I`@?HGHs@@}@BORWRGb@@FFJ^@ZCLc@d@?HLR?\\GPIHu@b@a@\\AdAJX\\N?Ny@f@A~@NTF@`@IPHDCHaATKTAHf@BFVBNQPBJLZxBDHB@b@Y^@Yb@?TJ?NIN[PGl@A?SKe@BYEG[K_@c@CIDIbAELEVYGa@@MHKh@Wf@IfBA|BJHBDJZL?hA`@@HBJT?TML_@@CB@^AHi@JMNADXN~@C^Hp@?DCBk@LWPMZ@LDh@TXDJAPQDSHE~@ALEBQEUUY[SOAu@?e@AWQFg@Es@@OZu@Ha@NY\\YHYHEXBTZA`@S^HPNBz@CJPRGFWVDLDNXB^JRZJHRAt@FN\\KL?TJJ?ZY^CHb@J@HGL}@LATZNDB^JRPFJRd@CZDHHDTd@Lt@?TQ\\y@\\YPCT?DZFJTFZB\\AZGl@UPOAq@EOIGeACYKCa@FU?k@F_@YICo@?SBGTEVBPf@TNZl@^f@VHPCD[Ki@?_@^E@OJEX@TFd@@@GH?TCVS^KV@@DGVq@f@CH?LDDh@?ZCVJITm@PIFDR^LLLBNIb@GH[CY[KCGDEjBZWZIZAFDEHu@REJFR\\D`@QPFPGJKMu@BQZUR?LDTRHNF\\?RETOVm@JIDGJAXBH^H@LHFXBl@MP?`@LVAFa@ZVD\\BB|@?FBFXFLHBFANUHCFBLX?LMZAl@BHH@Z]JCLBRXNJD`@LRXFXC\\N\\EFGIYUQLSJ?ZPL?ZQDD@f@^B@B@PEV?\\HTTLBHATo@B@Nn@Xj@Lt@Fb@L^DXHjAA@UW[@IJON?LRRJNA\\a@`@EFs@JGd@B^CBC@SDCr@DDD@d@BFVFHFBHCRMXC|@EHGH_@HCZKX?FNR?t@DRRPLDl@KX?FDXl@?n@PB\\WPAVTNEBIAMMWAG@CP?JDn@v@CX_@`@CJFVFF^@NKf@e@LIPAow@zgAgrD`cFyc@~l@wAfCyu@zdAm{Bl}CsjAd_ByGbJUVSG_@Uc@a@Qi@SSi@_@OUYw@QYWUOEk@IKOEk@Ya@]Ys@]cA_A]MWSa@k@[QOUSO{@eAm@m@o@i@s@_@YWi@{@SSa@UEIGm@]i@mBGg@^c@p@e@\\UT[f@Wz@GDs@HMHcAhAq@f@e@TUV]n@]^m@Xo@d@s@BOH_@RaAr@k@^o@Z{Bz@iAr@g@V_AXi@Ji@DGBKPkAV{@Zi@f@sAbBKJc@Xm@v@a@`@e@\\e@PS@SC]OGMYo@aAmC[i@u@aAiAgAWk@g@[SWKa@@[Vq@?SMi@Ym@c@i@e@[_@Kq@M{@CWFm@Zm@d@[ZcAfBg@p@eAbAcAl@a@H]P_@JU@eAK_BU_@Mg@]m@k@u@[a@WcA[aEwBkEsAsBy@_Ai@kAg@mAc@iCw@k@]y@k@[Ok@G{Aq@g@Me@CaAD[JUPSZGd@?ZHpABRVz@LHVh@Hf@Bf@CvAQ^a@h@]Le@HgAFyDF[AYEe@Wa@a@_AeB_A_AMSYg@Wu@WKIMAOB@k@}@m@qA_@sAKo@?m@Ho@Tq@Ve@VUXSl@QjAy@f@c@r@}@LWFUp@}@L[Dm@C[IYMW[e@k@g@g@UwC]uAJsCfAyAn@iAl@ON]SZTUVi@`@a@P[XWh@iA~@[b@u@~Ac@n@GAMNo@hA_@b@[N_@BYISO[m@c@[WWSa@Oi@a@aA[wA[k@a@qAs@sAi@kBWi@[g@y@}@m@cA_@e@q@k@Wa@Sa@a@sAYu@]q@W_@o@a@[Mw@I_@AiBAu@Eo@Qo@Ym@a@]]g@q@Yk@Ss@e@eAEi@IGa@uBEa@IaBAaBMoASgAYw@c@y@g@Q_Ba@WIg@YWEq@CsBAqBQe@?i@DQNa@|@{@tA_ApAo@p@OJa@Rq@Ry@Je@Ac@Gc@Mg@Q{@m@m@k@]o@a@iA@u@Mm@GyBOaAI[IAO}BaBwOk@j@_@}@WSWe@SYg@_@c@K}@Cu@B]De@Re@^aAPsDhAgANi@BoAGsAWsAe@e@W_@YQWESAw@NyAB}@?}@G_BI}@O}@Sk@Wg@g@w@w@u@c@y@k@c@s@c@wAq@k@Qa@_@_Bw@k@_@q@g@WYU]Uq@Gc@BC?e@Gq@@mBH]Te@j@mAXe@l@y@Fg@CQOQK[QOa@Ug@KeACqDDcDNk@As@Es@QIOMk@Ak@Ds@ZaCHiA@_@A{@Gs@Qu@GOU_@q@y@i@mAe@mAUy@OSO_@K_@Ga@S]ICg@c@oBaAyCiAwAs@o@WwAkAi@_@qAs@{@_@oAqAk@c@QSSg@Kk@M]KO_@a@q@i@k@w@_B}AQSq@qASQa@QWCg@?aEHsBLiB?aCQyDk@a@KQI[a@Oa@UYMIi@SoAUgAEq@Im@Qm@Sw@_@iDkCe@Yg@Wy@UaBYuAQ{@ASKm@g@qAwASUWs@[m@[_@_@]QWCSAcAKw@Kq@W}@_@q@OOq@YiAOq@C_C?qAMcAWyAy@QW[u@OaACq@BMC?Ca@?s@JmAPo@@e@IM]M_AEwBYw@Qq@Ua@Sy@g@oAcAu@u@gAwAeAy@W[u@g@GQA_@JYh@c@v@e@v@]lASn@Qv@[n@Kt@Gd@M\\OHMFY@QGcAOe@w@uAyBiDa@{@Yy@McACaAFm@Ru@CSO_@[[o@[kBq@a@[w@y@OKYOm@McAKcA?u@EsBY_@GoBm@wAU{Am@}@k@o@o@gAuAk@i@]a@c@w@_@wAUg@_@_@e@Ue@E]@aANYHu@d@WJqA`@q@NY?eAMe@BUDeAX}@^iBpAoEjCUP]^WJsAZu@JcA?u@Eo@MyBMy@M{@U}@a@WGYCY@KHMVE`@M`@IBu@Bk@ASEQK_@a@EW@WX[fAy@^a@bCaA|@g@t@i@t@eAx@u@T]ZY^aAv@aAp@gAd@oARs@j@aARa@~@eCrAqCNc@Jm@N_@Hs@Nw@Pu@b@wA|@kEf@mA`@_B`@}@RQl@Qj@It@CbA@\\Cr@Ot@Yl@_@j@s@nAmANWtAo@tAc@REPGFEHS?MGa@Ue@e@g@WOSI}Aa@s@[WCm@WaAS_@UuBo@EGa@W_@MsB[sCq@iB_@gFgBmC{@{Ao@y@e@i@s@}@gCo@oA]g@_@YY_@c@[kAq@UW_@q@o@]oAaA?Ea@_@KWG]Gu@A{ALaFC_DSoCUcBa@aCc@cASs@u@uAo@mBQ_@e@g@i@aAUm@Qu@O_AE{@Bw@b@c@?mHiA_GcCgImAsD{@qFz@oFnFcEnFMxBeDOcAhDoB~d@ya@`l@c`@rZfFv@_AaBqAfDaE`BrAzj@aq@tu@w|@dq@ey@~AoJbEyb@oCeSpB_I~AiFjIkg@oBaO?g@{Nuy@qHy[oRuv@";
	var mara_north_conservancy_region_path = google.maps.geometry.encoding.decodePath(mara_north_conservancy_region);
	var mara_north_conservancy_region_shape = new google.maps.Polygon({ paths: mara_north_conservancy_region_path, strokeColor: '#000000', strokeOpacity: 0.5, strokeWeight: 1, fillColor: '#B388FF', fillOpacity: 0.5, }); 
	mara_north_conservancy_region_shape.setMap(map);
	attachLabelPolygon(mara_north_conservancy_region_path,"Mara North ");
    
    //ol kinyei conservancy
	var ol_kinyei_conservancy_region = "rfwGuj~vE~Uo\\a@_JrDgNhHkKhC{K|O}WSiG}L_PiKsBiDuH{MoJaQgQwFkSgF}OgFoYQiN{@uLkLnQ}LnQgDrDwF_GuHkByJKmKwG_AiIoImLqEiKi@s@yAaKkFoHmIgBcFoFoIz@qMF}OuAkk@_T{K}FgH{KuGyL{B}NFgSuTwE{h@{D`Gmu@?gXu[uAePuPcHoMHwQ~MiY`Ku_@dXe[j@gJ_QvIql@z@}^{Rmj@m[_]sOkDyNjt@amAq]kZuLbZ}S|E_RoJqRsDYbSyQ|Wo`@bq@d[PxGj^wIxs@kPra@wThY_CxYYbSeT`OyUXuIwIsbAyCyG`@k@zp@?lH~EIXzNkHjW}OvXqGhRvXbLt[hUzOnFrKa@zVqk@pKmTnIcDr^rKpRdMtHbDeIjZoQd\\aGzVrObHtW|DjHtE|PqCzRaR~T{OvUhRpJiCnU{KtLlPv`@lf@a@f`@iGfhAqG`DcWi@eTr@}HzVnF|LnMxCdDD`BMbQ~B~HnJfRmHfMlJnIaIXm@lIrAxm@td@~tA~CjDL`MZzZp@|k@xAv_@kRf\\iCp|@zIP?b@yAjLxIfKjk@HI"; 
    var ol_kinyei_conservancy_region_path = google.maps.geometry.encoding.decodePath(ol_kinyei_conservancy_region);
    var ol_kinyei_conservancy_region_shape = new google.maps.Polygon({ paths: ol_kinyei_conservancy_region_path, strokeColor: '#000000', strokeOpacity: 0.5, strokeWeight: 1, fillColor: '#795548', fillOpacity: 0.5, }); 
    ol_kinyei_conservancy_region_shape.setMap(map);
    attachLabelPolygon(ol_kinyei_conservancy_region_path,"Ol Kinyei ");

    // enonkishu conservancy
    var enonkishu_conservancy_region = "f_wE_oovEcPhyAgRpOyI_NyJlDkCtg@aLd@eJAkGNRtAbxBpaD_cCdtCmTtuAf`AzTcRncAqCdA{Bg@iA]}AScAUaAGi@a@aBaAgByA]]e@aBJa@\\o@jBgAxAuAh@cBLiBtAoBp@{@P]Ys@a@i@o@g@w@Ce@`@U`ACp@cA\\oBPuACgC`@qJ~BgDf@qBJiAd@KpAp@lEb@pAc@fA{@b@]\\aBJcAC]MMWOUw@iCYkDGkCg@eA}AkAkDeA_CXcABk@e@UcACc@Fm@j@]lAk@h@a@?i@Q_A]g@u@CaAP{@v@{@tAm@h@s@\\w@Bs@]a@yAw@oJi@cBkBuAmCi@mBYaAP{@zBa@fCgAtAjA~Af@~@FzBr@pA\\|Aa@bAmAXqABYOHg@Rm@PeAC{@]i@o@k@qCi@eDkBo@q@e@aAiAi@aGFkC_A_HmAqAT{@v@_ALk@k@?kBTuCG_AiAGuEbAe@]Us@PKYw@_A{@aAYcATeBfAuAdAqAJs@e@Os@?gABc@l@i@r@UPa@Fi@FmA\\}A\\iA`AuAbAoAdB_Bj@}A?s@]i@iA?{BfAuATi@Cw@GuCgBIe@Lw@`@a@n@U~@j@l@l@r@X\\e@Lw@FgBe@gAeAqAoAsBUSQiAL}AFwBG{Bs@gBs@w@}A_AiA}A{HcHiEo@e@XEbAKtAs@Xi@GeA]WUkDi@g@Cu@d@g@r@YxAStA?tAa@d@k@T{@?qAiCm@yA]s@U]Ms@GuCFkAPo@i@_Av\\}o@hKeu@fB}i@eIqd@uWaOmq@ih@}L}SmTa]cWgv@cWki@ePq]}Lwg@wIg`@yCwPzi@{kBvXok@nr@mx@re@u_@bO_F~cC}nAzDeBxCwB~TzmDrOvg@jKpNvv@zfAhRhYpGhDbe@l[nDpC"; 
    var enonkishu_conservancy_region_path = google.maps.geometry.encoding.decodePath(enonkishu_conservancy_region);
    var enonkishu_conservancy_region_shape = new google.maps.Polygon({ paths: enonkishu_conservancy_region_path, strokeColor: '#000000', strokeOpacity: 0.5, strokeWeight: 1, fillColor: '#A59AC6', fillOpacity: 0.5, }); 
    enonkishu_conservancy_region_shape.setMap(map);
    attachLabelPolygon(enonkishu_conservancy_region_path,"Enokishu ");

    //ol chorro conservancy
    var ol_chorro_conservancy_region = "jp|Eub|uEeVhYev@|tAI~@fa@`kDt@CxF`f@MCuA}@uAcBc@aC_@cA_@Yc@WgELuBMqCUeCPaFGmBTuCh@oAz@mD\\aQfFy@BuAkA]yAOuBh@yDNoCe@i@sABs@v@wCdCyClByA?gCuBqF_GyEcIoCu@cEw@mB}BcAyA]yDmCcIe@cAa@cCa@{FgG_JoCkB{BaDa@y@UuBfAyCO}@e@w@sBu@gEmBwCm@yPt@cA?g@`B|Av@bAdACd@KTwDhB_IrE}EnF]CSKi@a@QB{@BaBr@u@EQq@d@wApAa@~CqBdBuAPcBk@}AY_A]u@s@cAOq@YKa@B}At@]Gq@GcAYe@XMJT`BBnFwAxBaBxA}EbFuFfCqAp@cJiEmFn@wBLoACUICoABSXa@VkAgAs@gACqBTcCw@gAu@uCgAeBkAgAOcCFe@p@Uh@a@?kA[uAuA_AsAu@u@]_A?q@R]Xw@KoAYK_AF_A\\kA`Be@Ze@KYa@?G\\cAZqBG}Da@oAm@kACgC{BaAe@s@Fi@`@Yv@Wd@Zt@?lCTlIyHzBaCJ[DuARsAd@Gj@?t@~@Xt@JnAf@TnAYd@q@Jw@?{CSkAe@}AkDcB}DyDmAuBWmBh@m@Bs@Gq@aBkCC_At@a@xAD`@l@BNjA`@n@JpB|A`Bx@v@v@fARh@OLe@j@aJGi@]m@qAKaDcAsAOgC`@gAUa@q@Fi@Je@z@]dEYfAUrCsAdBa@~@G`Bl@r@p@rA\\bAGbCa@nA~@RZzBn@xCk@RWSm@]aBjAm@TYUYo@[G{@v@i@RGz@?zBt@hBnAz@?`@a@FK?a@Ci@kAeBNu@TQ`@?hBh@fCPPk@sBuBOy@Jm@\\Yp@?~@NxAWdBcAd@kAnAmCf@yAvAm@bCy@Ja@e@UgAJaB?iBH{DgAi@qB?gAr@cAbAkA`BcAtBY~@n@v@nA`@jAl@l@tABp@OTYRm@[?_AQ][Qs@d@O?s@d@aA~Bo@r@q@~@cC`@m@rAO\\cA`@_AC{AQo@Si@?a@VoAiBoCqEyDs@Y{@Xm@hDGz@TfBMpBu@\\aB[wB{@cAwAYoC_AoCa@_DdBoCfAkCG]s@}@q@e@gAa@yAMuBGyAW}EiDgAkAU_BbA_Aj@]`CwClCiIbA_AJe@?GKi@_A?{@J_CbAUm@e@?c@ImCcA}AcA_AuAm@{B[{@YgBCyAWo@{Au@g@_BiA_DwDcCGi@n@}@rAWJ{ABcAD[Z{@vAsCI{@UgB@k@`@}A_BuBcAsB?i@F_Af@cBjAeDbAyAhAkAxB}@XkAX{BLkCNs@bAeABc@Y}CBkA@kEXo@R}@G_Ds@yCNs@nAc@d@u@F}@Yq@u@oAK}@JgBRaBHSwKeKhAqAdj@ql@CChJoKZlBPKFZfD}BnkAonArmB{Jt}A}HjdAlqEovBrfC";
    var ol_chorro_conservancy_region_path = google.maps.geometry.encoding.decodePath(ol_chorro_conservancy_region);
    var ol_chorro_conservancy_region_shape = new google.maps.Polygon({ paths: ol_chorro_conservancy_region_path, strokeColor: '#000000', strokeOpacity: 0.5, strokeWeight: 1, fillColor: '#8B0000', fillOpacity: 0.5, }); 
    ol_chorro_conservancy_region_shape.setMap(map);
    attachLabelPolygon(ol_chorro_conservancy_region_path,"Ol Chorro ");

    //lemek conservancy
    var lemek_conservancy_region = "pj~Eud~uEh|@sdA{g@a{BzAq@Ge@dE_DzC{AnBs@vAcA|G_DrCu@rHKnIe@xFE`Rh@jFRhCNdBBlAGfAQz@c@t@Y`As@H]nBnC|JjMpAlC~F~IlAxBj@pAL`AMlCo@~DsAfHWpBMbBe@hJE`Dz@`HxGdOd^zdAfA|DfHtXxG|XpKpa@nO|p@zNty@?f@nB`OkIjg@_BhFqB~HnCdScExb@_BnJ{b@rh@_uAt`B{Yt]aBsAgD`E`BpAw@~@sZgFal@b`@{`@~]gG~C_@{@q@uCOy@KuB?{Br@iB\\_E~@aAZs@fBcD^o@d@g@l@a@\\Q~@ULaA_@k@_Ag@}DkAsCcBqAcAo@m@cCoDc@mBeBmCoAaBqAu@mCgD_F{D[SiAmAyBkAeBiAi@aCAyB{AqA{@mBiA_@iA}@eDk@kCaBqBs@qA{Am@c@cAy@m@gBOaBd@y@z@c@d@wAMuAIUW}B?KnG_NyFaf@u@Bga@akDH_Adv@}tAjpAi{A";
    var lemek_conservancy_region_path = google.maps.geometry.encoding.decodePath(lemek_conservancy_region);
    var lemek_conservancy_region_shape = new google.maps.Polygon({ paths: lemek_conservancy_region_path, strokeColor: '#000000', strokeOpacity: 0.5, strokeWeight: 1, fillColor: '#3399FF', fillOpacity: 0.5, }); 
    lemek_conservancy_region_shape.setMap(map);

    attachLabelPolygon(lemek_conservancy_region_path,"Lemek "); 

      


    function attachLabelPolygon(polygonCords,title) {
    	 
    	  //Define position of label
          var bounds = new google.maps.LatLngBounds();
          for (var i=0; i< polygonCords.length; i++) {
            bounds.extend(polygonCords[i]);
          }

          var myLatlng = bounds.getCenter();

         


          var mapLabel = new MapLabel({
              text: title,
              position: myLatlng,
              map: map,
              fontSize: 12,
              align: 'center',
              minZoom: 10,
              strokeWeight:2,
              fontColor:'#000000'
          });
         




          mapLabel.set('position', myLatlng);
	}

          var contentString_naboisho =
                    '<div class="container-fluid naboisho"  style="width:600px;margin:0 0 20px 20px;height:90px;"">' +

                    '<h3> <center>Naboisho Conservancy</center></h3>' +
                    '<div class="row">' +              
                     
                    '<div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">' +
                    '<img height="200" src="<?php echo base_url().'assets/images/lion.jpg';?>">'+
                    '</div>' +
                   
                    '<div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">' +

                    '<p><i class="fa fa-clock-o  fa-lg"></i>  Established in 2010</p>' +
                    '<p><i class="fa fa-circle  fa-lg"></i>   Size is 52,956 acres</p>' +
                    '<p><i class="fa fa-users  fa-lg"></i>  596 land owners</p>' +
                    '<p><i class="fa fa-spinner  fa-lg"></i>  7 camps</p>' +
                    '<p><i class="fa fa-bed  fa-lg"> </i>     144 beds</p>' +
                    '<p><i class="fa fa-user  fa-lg"> </i>     200 jobs in hotels and conservancy management</p>' +
                     '<p><i class="fa fa-male   fa-lg"> </i>     35 Rangers and scouts</p>' +
                   
                    
                    '</div>' +

                    '</div>' +
                    '</div>'
              ;

               var infowindow_naboisho = new google.maps.InfoWindow({
                content: contentString_naboisho,

              });

                 var marker_naboisho= 
              new google.maps.Marker({ 
                position: new google.maps.LatLng(-1.4034, 35.3190), 
                title: 'Naboisho  conservancy', map:map
               });
                    //naboisho
                    var positions= {lat: -1.4034, lng:  35.3190};

                  mara_naboisho_conservancy_region_shape.addListener('mouseover', function() {
                            // infowindow_naboisho.position(marker_naboisho);

                            infowindow_naboisho.open(map,marker_naboisho);
                 });
                  mara_naboisho_conservancy_region_shape.addListener('mouseout', function() {
                      infowindow_naboisho.close();
                  });
       


                 // mara  conservancy

          var contentString_mara =
                     '<div class="container-fluid mara"  style="width:600px;margin:0 0 20px 20px;height:90px;"">' +

                    '<h3> <center>Mara North Conservancy</center></h3>' +
                    '<div class="row">' +              
                     
                    '<div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">' +
                    '<img height="200" src="<?php echo base_url().'assets/images/lion.jpg';?>">'+
                    '</div>' +
                   
                    '<div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">' +

                    '<p><i class="fa fa-clock-o  fa-lg"></i>  Established in 2008</p>' +
                    '<p><i class="fa fa-circle  fa-lg"></i>   Size is 69,160 acres</p>' +
                    '<p><i class="fa fa-users  fa-lg"></i>  688 land owners</p>' +
                    '<p><i class="fa fa-spinner  fa-lg"></i>  14 camps</p>' +
                    '<p><i class="fa fa-bed  fa-lg"> </i>     314 beds</p>' +
                    '<p><i class="fa fa-user  fa-lg"> </i>     250 jobs in hotels and conservancy management</p>' +
                     '<p><i class="fa fa-male   fa-lg"> </i>     41 Rangers and scouts</p>' +
                   
                    
                    '</div>' +

                    '</div>' +
                    '</div>'
              ;

               var infowindow_mara = new google.maps.InfoWindow({
                content: contentString_mara
              });

                 var marker_mara= 
              new google.maps.Marker({ 
                position: new google.maps.LatLng(-1.2105, 35.1144), 
                title: 'Naboisho', map:map
               });
                    //naboisho
                    var positions= {lat: -1.4034, lng:  35.3190};

                  mara_north_conservancy_region_shape.addListener('mouseover', function() {
                            // infowindow_naboisho.position(marker_naboisho);

                            infowindow_mara.open(map,marker_mara);
                 });
                  mara_north_conservancy_region_shape.addListener('mouseout', function() {
                      infowindow_mara.close();
                  });
       
                 // kinyei  conservancy

          var contentString_kinyei =
                     '<div class="container-fluid kinyei"  style="width:600px;margin:0 0 20px 20px;height:90px;"">' +

                    '<h3> <center>Ol Kinyei Conservancy</center></h3>' +
                    '<div class="row">' +              
                     
                    '<div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">' +
                    '<img height="200" src="<?php echo base_url().'assets/images/lion.jpg';?>">'+
                    '</div>' +
                   
                    '<div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">' +

                    '<p><i class="fa fa-clock-o  fa-lg"></i>  Established in 2005</p>' +
                    '<p><i class="fa fa-circle  fa-lg"></i>   Size is 18,641 acres</p>' +
                    '<p><i class="fa fa-users  fa-lg"></i>  230 land owners</p>' +
                    '<p><i class="fa fa-spinner  fa-lg"></i>  4 camps</p>' +
                    '<p><i class="fa fa-bed  fa-lg"> </i>     48 beds</p>' +
                    '<p><i class="fa fa-user  fa-lg"> </i>     51 jobs in hotels and conservancy management</p>' +
                     '<p><i class="fa fa-male   fa-lg"> </i>     20 Rangers and scouts</p>' +
                   
                    
                    '</div>' +

                    '</div>' +
                    '</div>'
              ;

               var infowindow_kinyei = new google.maps.InfoWindow({
                content: contentString_kinyei
              });

                 var marker_kinyei= 
              new google.maps.Marker({ 
                position: new google.maps.LatLng( -1.4210,  35.4156), 
                title: 'Naboisho', map:map
               });
                    //naboisho
                    var positions= {lat: -1.4034, lng:  35.3190};

                  ol_kinyei_conservancy_region_shape.addListener('mouseover', function() {
                            // infowindow_naboisho.position(marker_naboisho);

                            infowindow_kinyei.open(map,marker_kinyei);
                 });
                  ol_kinyei_conservancy_region_shape.addListener('mouseout', function() {
                      infowindow_kinyei.close();
                  });


                     // olare Orok  conservancy

          var contentString_olare =
                            '<div class="container-fluid olare"  style="width:600px;margin:0 0 20px 20px;height:90px;"">' +

                    '<h3> <center>Olare Orok Conservancy</center></h3>' +
                    '<div class="row">' +              
                     
                    '<div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">' +
                    '<img height="200" src="<?php echo base_url().'assets/images/lion.jpg';?>">'+
                    '</div>' +
                   
                    '<div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">' +

                    '<p><i class="fa fa-clock-o  fa-lg"></i>  Established in 2006</p>' +
                    '<p><i class="fa fa-circle  fa-lg"></i>   Size is 21,386 acres</p>' +
                    '<p><i class="fa fa-users  fa-lg"></i>  157 land owners</p>' +
                    '<p><i class="fa fa-spinner  fa-lg"></i>  4 camps</p>' +
                    '<p><i class="fa fa-bed  fa-lg"> </i>     70 beds</p>' +
                    '<p><i class="fa fa-user  fa-lg"> </i>     51 jobs in hotels and conservancy management</p>' +
                     '<p><i class="fa fa-male   fa-lg"> </i>     24 Rangers and scouts</p>' +
                   
                    
                    '</div>' +

                    '</div>' +
                    '</div>'
              ;

               var infowindow_olare = new google.maps.InfoWindow({
                content: contentString_olare
              });

                 var marker_olare= 
              new google.maps.Marker({ 
                position: new google.maps.LatLng( -1.35891,35.21611), 
                title: 'Olare', map:map
               });
                    

                  marker_olare.addListener('mouseover', function() {
                            // infowindow_naboisho.position(marker_naboisho);

                            infowindow_olare.open(map,marker_olare);
                 });
                  marker_olare.addListener('mouseout', function() {
                      infowindow_olare.close();
                  });


                   // Lemek  conservancy

          var contentString_lemek =
                    '<div class="container-fluid lemek"  style="width:600px;margin:0 0 20px 20px;height:90px;"">' +

                    '<h3> <center>Lemek Conservancy</center></h3>' +
                    '<div class="row">' +              
                     
                    '<div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">' +
                    '<img height="200" src="<?php echo base_url().'assets/images/lion.jpg';?>">'+
                    '</div>' +
                   
                    '<div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">' +

                    '<p><i class="fa fa-clock-o  fa-lg"></i>  Established in 2009</p>' +
                    '<p><i class="fa fa-circle  fa-lg"></i>   Size is 6,151 acres</p>' +
                    '<p><i class="fa fa-users  fa-lg"></i>  480 land owners</p>' +
                    '<p><i class="fa fa-spinner  fa-lg"></i>  5 camps</p>' +
                    '<p><i class="fa fa-bed  fa-lg"> </i>     332 beds</p>' +
                    '<p><i class="fa fa-user  fa-lg"> </i>     120 jobs in hotels and conservancy management</p>' +
                     '<p><i class="fa fa-male   fa-lg"> </i>     18 Rangers and scouts</p>' +
                   
                    
                    '</div>' +

                    '</div>' +
                    '</div>'
              ;

               var infowindow_lemek = new google.maps.InfoWindow({
                content: contentString_lemek
              });

                 var marker_lemek= 
              new google.maps.Marker({ 
                position: new google.maps.LatLng( -1.1516, 35.1897), 
                title: 'Lemek', map:map
               });
                  
                lemek_conservancy_region_shape.addListener('mouseover', function() {
                            // infowindow_naboisho.position(marker_naboisho);

                            infowindow_lemek.open(map,marker_lemek);
                 });
                  lemek_conservancy_region_shape.addListener('mouseout', function() {
                      infowindow_lemek.close();
                  });


                   // Olchoro  conservancy

          var contentString_olchoro =
                    '<div class="container-fluid Olchoro"  style="width:600px;margin:0 0 20px 20px;height:90px;"">' +

                    '<h3> <center>Olchoro Conservancy</center></h3>' +
                    '<div class="row">' +              
                     
                    '<div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">' +
                    '<img height="200" src="<?php echo base_url().'assets/images/lion.jpg';?>">'+
                    '</div>' +
                   
                    '<div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">' +

                    '<p><i class="fa fa-clock-o  fa-lg"></i>  Established in 1992</p>' +
                    '<p><i class="fa fa-circle  fa-lg"></i>   Size is 15,765 acres</p>' +
                    '<p><i class="fa fa-users  fa-lg"></i>  170 land owners</p>' +
                    '<p><i class="fa fa-spinner  fa-lg"></i>  4 camps</p>' +
                    '<p><i class="fa fa-bed  fa-lg"> </i>     134 beds</p>' +
                    '<p><i class="fa fa-user  fa-lg"> </i>     150 jobs in hotels and conservancy management</p>' +
                     '<p><i class="fa fa-male   fa-lg"> </i>     15 Rangers and scouts</p>' +
                   
                    
                    '</div>' +

                    '</div>' +
                    '</div>'
              ;

               var infowindow_olchoro = new google.maps.InfoWindow({
                content: contentString_olchoro
              });

                 var marker_olchoro= 
              new google.maps.Marker({ 
                position: new google.maps.LatLng( -1.1279, 35.2493), 
                title: 'Olchoro Conservancy', map:map
               });
                  
                ol_chorro_conservancy_region_shape.addListener('mouseover', function() {
                            // infowindow_naboisho.position(marker_naboisho);

                            infowindow_olchoro.open(map,marker_olchoro);
                 });
                  ol_chorro_conservancy_region_shape.addListener('mouseout', function() {
                      infowindow_olchoro.close();
                  });



                   // Enonkishu  conservancy

          var contentString_Enonkishu =
                    '<div class="container-fluid Enonkishu"  style="width:600px;margin:0 0 20px 20px;height:90px;"">' +

                    '<h3> <center>Enonkishu Conservancy</center></h3>' +
                    '<div class="row">' +              
                     
                    '<div class="col-sm-4 col-lg-4 col-md-4 col-xs-12">' +
                    '<img height="200" src="<?php echo base_url().'assets/images/lion.jpg';?>">'+
                    '</div>' +
                   
                    '<div class="col-sm-8 col-lg-8 col-md-8 col-xs-12">' +

                    '<p><i class="fa fa-clock-o  fa-lg"></i>  Established in 2011</p>' +
                    '<p><i class="fa fa-circle  fa-lg"></i>   Size is 5,928 acres</p>' +
                    '<p><i class="fa fa-users  fa-lg"></i>  31 land owners</p>' +
                    '<p><i class="fa fa-spinner  fa-lg"></i>  2 camps</p>' +
                    '<p><i class="fa fa-bed  fa-lg"> </i>     12 beds</p>' +
                    '<p><i class="fa fa-user  fa-lg"> </i>     65 jobs in hotels and conservancy management</p>' +
                     '<p><i class="fa fa-male   fa-lg"> </i>     13 Rangers and scouts</p>' +
                   
                    
                    '</div>' +

                    '</div>' +
                    '</div>'
              ;

               var infowindow_Enonkishu = new google.maps.InfoWindow({
                content: contentString_Enonkishu
              });

                 var marker_Enonkishu= 
              new google.maps.Marker({ 
                position: new google.maps.LatLng(-1.0784541153990252,35.26896267211919), 
                title: 'Enokishu Conservancy', map:map
               });
                  
                enonkishu_conservancy_region_shape.addListener('mouseover', function() {
                            // infowindow_naboisho.position(marker_naboisho);
                             // infowindow_Enonkishu.setPosition({lat: -1.0784541153990252, lng: 35.26896267211919});
                            infowindow_Enonkishu.open(map,marker_Enonkishu);
                 });
                  enonkishu_conservancy_region_shape.addListener('mouseout', function() {
                      infowindow_Enonkishu.close();
                  });



}
</script> 
</head> 
<body onload="initialize()"> 

  <nav id="myNavbar" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=site_url('Home/')?>"><img id="logo" src="<?php echo base_url().'assets/images/logo.png';?>"  class="img-responsive"></a> 
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              
             
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
              <li ><a style="  background-color: #d5ca85; color:#000;" href="<?=site_url('home/home')?>">HOME </a></li>
               <li ><a   href="<?=site_url('conservancies/')?>">Conservancies</a></li>
             
                <li><a  href="<?=site_url('population/')?>">POPULATION</a></li>
              
              <li><a href="<?=site_url('leases/')?>">LEASES</a></li>
              <li><a  href="<?=site_url('social/')?>">social media</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
  </nav>

    <div class="container-fluid">
    	 <div class="row">
    	 	   <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
           <div class="panel panel-default" id="first">
             <div class="panel-heading">CONSERVANCIES SUMMARY</div>
               <div class="panel-body"> 
                <?php foreach($summary as $all_conservancies){?>
                    <div class=" col-lg-6 data_item1">
                    <h3>
                      <?php echo number_format($all_conservancies->all_conservancies);?> 
                    </h3>
                        <p>Conservancies</p>
                            
                            </div>
                  
                  <div class=" col-lg-6 data_item2">
                    <h3>
                      <?php echo number_format($all_conservancies->total_acres);?> Acres
                    </h3>
                        <p>Total size af all conservacies</p>
                            
                            </div>

                            <div  class="col-lg-6 data_item3">
                    <h3>
                      <?php echo number_format($all_conservancies->Land_Owners);?> 
                    </h3>
                        <p>Total land owners</p>
                            
                            </div>
                            <div  class="col-lg-6 data_item4">
                    <h3>
                      <?php echo number_format($all_conservancies->Women_Land_Owners);?> 
                    </h3>
                        <p> Women land owners</p>
                            
                            </div>

                            <div  class="col-lg-6 data_item5">
                    <h3>
                      <?php echo number_format($all_conservancies->Reg_Leases);?> 
                    </h3>
                        <p>Total Registered Leases</p>
                            
                            </div>
                            <div  class="col-lg-6 data_item6">
                    <h3>
                      <?php echo number_format($all_conservancies->Lease_Acre);?> Acres 
                    </h3>
                        <p> Total Leased Acres</p>
                            
                            </div>
                              <div  class="col-lg-12 data_item7">
                    <h3>
                      <?php echo "Ksh. ". number_format($all_conservancies->Leasehold_Fees);?>  
                    </h3>
                        <p> Total LeaseHold fees </p>
                            
                            </div>
                            

                <?php }?>
               </div>
                 <div class="panel-footer"></div>
               </div>
      </div>
    	 	  <div class="col-lg-8">
    	 	  	<div id="map"></div>
    	 	  </div>
    	 	
    	 </div>
    	
    </div>
<style type="text/css">
    .naboisho p{
      font-weight: bold;
    }

     .naboisho .fa{
      color:green;
    }

     .naboisho h3{
      color:green;
      margin-bottom: 3%;
    }
     .mara p{
      font-weight: bold;
    }

     .mara .fa{
      color:purple;
    }

     .mara h3{
      color:purple;
      margin-bottom: 3%;
    }

      .kinyei p{
      font-weight: bold;
    }

     .kinyei .fa{
      color:#795548;
    }

     .kinyei h3{
      color:#795548;
      margin-bottom: 3%;
    }
      .olare p{
      font-weight: bold;
    }

     .olare .fa{
      color:#4CAF50;
    }

     .olare h3{
      color:#4CAF50;
      margin-bottom: 3%;
    }

    .lemek p{
      font-weight: bold;
    }

     .lemek .fa{
      color:#29B6F6;
    }

     .lemek h3{
      color:#29B6F6;
      margin-bottom: 3%;
    }

      .Olchoro p{
      font-weight: bold;
    }

     .Olchoro .fa{
      color:#8B0000;
    }

     .Olchoro h3{
      color:#8B0000;
      margin-bottom: 3%;
    }
    .Enonkishu p{
      font-weight: bold;
    }

     .Enonkishu .fa{
      color:#A59AC6;
    }

     .Enonkishu h3{
      color:#A59AC6;
      margin-bottom: 3%;
    }



    .chart {
        min-width: 320px;
        max-width: 800px;
        height: 220px;
        margin: 0 auto;
    }

    .data_item1{
        margin-top: 4%;
    background: #d5ca85;
    color: #fff
    border: 1px solid #fff;
    box-shadow: 40px;
    height: 80px;
     border-top-left-radius:.366em;
    border-bottom-left-radius:.366em;   
  }
  .data_item2{

        margin-top: 4%;
    background: #d5ca85;
    color: #fff
    border: 1px solid #fff;
    box-shadow: 40px;
    height: 80px;
   border-top-right-radius:.366em;
    border-bottom-right-radius:.366em;   
    }
    .data_item3{
         margin-top: 4%;
    background: #d5ca85;
    color: #fff
    border: 1px solid #fff;
    box-shadow: 40px;
    height: 80px;
    border-top-left-radius:.366em;
    border-bottom-left-radius:.366em;
    
    }
    .data_item4{
        margin-top: 4%;
    background: #d5ca85;
    color: #fff
    border: 1px solid #fff;
    box-shadow: 40px;
    height: 80px;
    border-top-right-radius: .366em;
    border-bottom-right-radius: .366em;
    
    }
    .data_item5{
         margin-top: 4%;
    background: #d5ca85;
    color: #fff
    border: 1px solid #fff;
    box-shadow: 40px;
    height: 80px;
    border-top-left-radius:.366em;
    border-bottom-left-radius:.366em;
    
    }
    .data_item6{
        margin-top: 4%;
    background: #d5ca85;
    color: #fff
    border: 1px solid #fff;
    box-shadow: 40px;
    height: 80px;
    border-top-right-radius: .366em;
    border-bottom-right-radius: .366em;
    
    }
      .data_item7{
        margin-top: 4%;
    background: #d5ca85;
    color: #fff
    border: 1px solid #fff;
    box-shadow: 40px;
    height: 80px;
    border-radius:.366em;
    }
    

 .panel-body h3 {
    text-align: center;
    padding-top: 0%;
    color: #000;
      }
    .panel-body  p{
      text-align: center;
    color: #000;
     }

   
    .panel-body p{
      text-align: center;
    color: #000;
     }
</style>


</body> 
</html>