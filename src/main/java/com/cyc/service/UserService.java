package com.cyc.service;

import com.cyc.dao.UserDao;

public class UserService {
    private UserDao userDao;

//    public boolean hasMatchUser(String userName, String password) {
//        return userDao.getMatchCount(userName, password) > 0;
//    }
//
//    public User findUserByUserName(String userName) {
//        return userDao.findUserByUserName(userName);
//    }
//
//    @Transactional
//    public void loginSuccess(User user) {
//        user.setCredits(5 + user.getCredits());
//        userDao.updateLoginInfo(user);
//    }

    public void setUserDao(UserDao userDao) {
        this.userDao = userDao;
    }
}
