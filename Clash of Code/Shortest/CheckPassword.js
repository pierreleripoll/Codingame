s=readline();print((/[\d\w]{8,}/i.test(s)&&/\d/.test(s)&&/\w/.test(s))?'true':'false')