package com.smart.dao;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.jdbc.core.JdbcTemplate;
import org.springframework.stereotype.Repository;

@Repository
public class UserDao {
    private JdbcTemplate jdbcTemplate;

    private final static String INSERT_USER_SQL =
            " INSERT INTO user(name, head, md5password) " +
                    " values(?,?,?) ";

    private final static String SELECT_USER_SQL =
            " SELECT * FROM user where userid = ?";

//    public int insertUser(String userName, int head, String password) {
//        String md5password = MD5.getMD5(password);
//        KeyHolder key = new GeneratedKeyHolder();
//        jdbcTemplate.update(connection -> {
//            PreparedStatement preState = connection.prepareStatement(INSERT_USER_SQL);
//            preState.setString(1, userName);
//            preState.setInt(2, head);
//            preState.setString(3, md5password);
//            return preState;
//        }, key);
//        return key.getKey().intValue();
//    }
//
//    public User selectUser(int userId) {
//        User user = new User();
//        jdbcTemplate.query(SELECT_USER_SQL, new Object[]{userId}, resultSet -> {
//            user.setUserID(resultSet.getInt("userid"));
//            user.setHead(resultSet.getInt("head"));
//            user.setName(resultSet.getString("name"));
//        });
//        return user;
//    }

    @Autowired
    public void setJdbcTemplate(JdbcTemplate jdbcTemplate) {
        this.jdbcTemplate = jdbcTemplate;
    }
}
