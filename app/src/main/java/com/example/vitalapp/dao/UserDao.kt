package br.com.andersonchoren.cadastroelogin.dao

import br.com.andersonchoren.cadastroelogin.model.User
import com.j256.ormlite.dao.BaseDaoImpl
import com.j256.ormlite.support.ConnectionSource

class UserDao(connectionSource: ConnectionSource?) : BaseDaoImpl<User,Int>(User::class.java) {
    init {
        setConnectionSource(connectionSource)
        initialize()
    }
}