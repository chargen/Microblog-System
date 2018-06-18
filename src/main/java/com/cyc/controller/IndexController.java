package com.cyc.controller;

import com.cyc.service.impl.BlogServiceImpl;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.servlet.ModelAndView;

@Controller
public class IndexController {

    @Autowired
    private BlogServiceImpl blogServiceImpl;

    @RequestMapping(value = "index.html")
    public ModelAndView showIndex() {
        System.out.println(111);
        ModelAndView modelAndView = new ModelAndView("index");
        modelAndView.addObject("count", blogServiceImpl.getBlogCount());
        return modelAndView;
    }
}
