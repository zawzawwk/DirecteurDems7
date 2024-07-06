/*
 * 酱茄小程序开源版
 * Author: 	酱茄
 * Help document：https://www.jiangqie.com/docs/kaiyuan/id1
 * License：MIT
 * Copyright ️ 2020 www.jiangqie.com All rights reserved.
 */

const Auth = require('./utils/auth.js');

App({

    app_name: '酱茄',

    onLaunch: function () {
        Auth.checkSession();
    },
    
})