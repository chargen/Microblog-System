package com.cyc.controller;

import org.springframework.web.bind.annotation.RestController;

@RestController
public class LoginController {
//    private UserService userService;
//
//    @RequestMapping(value = "/index.html")
//    public String loginPage() {
//        return "login";
//    }
//
//    @RequestMapping(value = "/loginCheck.html")
//    public ModelAndView loginCheck(HttpServletRequest request, LoginCommand loginCommand) {
//        boolean isValidUser = userService.hasMatchUser(loginCommand.getUserName(), loginCommand.getMd5password());
//        if (!isValidUser) {
//            return new ModelAndView("login", "error", "用户名或密码错误。");
//        }
//        User user = userService.findUserByUserName(loginCommand.getUserName());
//        user.setLastIp(request.getLocalAddr());
//        user.setLastVisit(new Date());
//        userService.loginSuccess(user);
//        request.getSession().setAttribute("user", user);
//        return new ModelAndView("main");
//    }
//
//    @Autowired
//    public void setUserService(UserService userService) {
//        this.userService = userService;
//    }
}
