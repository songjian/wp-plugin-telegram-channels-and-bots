.PHONY: clean

languages/tgchannels.pot: tgchannels.php
	xgettext -k__ -p languages/ -o tgchannels.pot --from-code=utf-8 tgchannels.php; \
	sed -i 's/CHARSET/UTF-8/' $@

languages/tgchannels-zh_CN.po: languages/tgchannels.pot
	msginit -i $^ -l zh_CN -o languages/tmp-zh_CN.po
	msgcat -o $@ $@ languages/tmp-zh_CN.po

languages/tgchannels-zh_CN.mo: languages/tgchannels-zh_CN.po
	msgfmt $^ -o $@

move:
	cp languages/tgchannels-zh_CN.mo ../../languages/plugins/

clean:
	rm -f languages/tmp-zh_CN.po
