package core.classes.hr;

// default package
// Generated Aug 25, 2014 2:45:14 PM by Hibernate Tools 4.0.0

import java.util.HashSet;
import java.util.Set;

/**
 * HrIdentitytype generated by hbm2java
 */
public class HrIdentitytype implements java.io.Serializable {

	private Integer identityTypeId;
	private String identityType;
	private Set hrIdentities = new HashSet(0);

	public HrIdentitytype() {
	}

	public HrIdentitytype(String identityType) {
		this.identityType = identityType;
	}

	public HrIdentitytype(String identityType, Set hrIdentities) {
		this.identityType = identityType;
		this.hrIdentities = hrIdentities;
	}

	public Integer getIdentityTypeId() {
		return this.identityTypeId;
	}

	public void setIdentityTypeId(Integer identityTypeId) {
		this.identityTypeId = identityTypeId;
	}

	public String getIdentityType() {
		return this.identityType;
	}

	public void setIdentityType(String identityType) {
		this.identityType = identityType;
	}

	public Set getHrIdentities() {
		return this.hrIdentities;
	}

	public void setHrIdentities(Set hrIdentities) {
		this.hrIdentities = hrIdentities;
	}

}
