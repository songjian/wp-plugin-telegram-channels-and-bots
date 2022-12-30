xgettext -k__ -p languages/ -o tgchannels.pot --from-code=utf-8 tgchannels.php

cd languages
msginit -i tgchannels.pot -l zh_CN -o tmptgchannels-zh_CN.po
msgcat -o tgchannels-zh_CN.po tgchannels-zh_CN.po tmptgchannels-zh_CN.po
msgfmt tgchannels-zh_CN.po -o tgchannels-zh_CN.mo
cp tgchannels-zh_CN.mo ../../../languages/plugins/